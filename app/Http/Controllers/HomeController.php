<?php

namespace App\Http\Controllers;

use App\Code;
use App\Jobs\SendSMS;
use App\Mail\WelcomeMail;
use App\Referral;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

use AllFunction;
use Illuminate\Support\Facades\Input;
use Mail;
use Redirect;
use Response;

class HomeController extends Controller
{


    public function index(){
    return view('login');
}
    public function login(){
        return view('login');
    }
    public function postLogin(Request $request){
        if (Auth::attempt(['user_code' => $request->Code, 'password' => $request->Password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
            $request->session()->flash('error', 'Invalid Details');
            return redirect('login');
        }
    }

    public function Register(){
        return view('register');
    }

    public function sms(Request $request, $id){
        if($request->ajax()){
            if(empty($id) || !is_numeric($id)){
                echo 'Error!!!';
            } else{
                $code = Code::where('mobile_no', '=', $id)->first();
                if ($code === null) {
                    $smscode = str_random(4);
                    $code = new Code;
                    $code->mobile_no = $id;
                    $code->code = $smscode;
                    $code->Save();
                    $message = 'Your Verification Code is '.$smscode;
                    echo 'Verification Code Has Been Sent To Your Mobile Phone';
                    dispatch(new SendSMS($message, $id));
                   // AllFunction::Sms(substr_replace($id, '234', 0, 1), $message);
                } else{

                    $end = Carbon::parse($code->updated_at);
                    $now = Carbon::now();
                    $minutes = $end->diffInMinutes($now);
                    $realminutes = 30 - $minutes;
                    if($minutes < 30) {
                        echo 'Please Wait For '.$realminutes.' Mins and Retry';
                    } else {
                        $code->howmany += 1;
                        $code->Save();
                        $message = 'Your Verification Code is '.$code->code;
                        echo 'Verification Code Has Been Sent To Your Mobile Phone';
                        dispatch(new SendSMS($message, $id));
                       // AllFunction::Sms(substr_replace($id, '234', 0, 1), $message);
                    }
                }



            }
        } else{
            return false;
        }

    }

    public function Autocomplete(){
        $term = Input::get('term');
        $results = array();
        $queries = User::Where('user_code', 'LIKE', '%'.$term.'%')
            ->Where('active', '=', '1')
            ->take(5)->get();
        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->user_code ];
        }
        return Response::json($results);
    }

    public function logout()
    {
       ;
        Auth::logout();
        return Redirect::to('login');
    }

    public function created(){
//        $child = Referral::find(18);
//        $child->delete();
        $real = Auth::user();
        $user = User::find(35);
        $root = Referral::find(17);
        $child2 = Referral::create(['name' => $user->user_code]);
        $child2->makeChildOf($root);
        $real->active = 1;
        $real->Save();
        $user->refer()->attach($child2);
////        $user = User::find(18);
//        $root = Referral::create(['name' => $user->user_code]);
//        $user->refer()->attach($root);
    }


    public function testing(){
      // $user = User::find(3);
       // Mail::to($user)->send(new WelcomeMail($user));

        dispatch(new SendSMS('hey', '08170574789'));
    }

}
