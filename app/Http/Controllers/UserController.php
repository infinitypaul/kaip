<?php

namespace App\Http\Controllers;

use App\Code;
use App\Http\Requests\Registration;
use App\Referral;
use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use AllFunction;
use Illuminate\Support\Facades\Validator;
use Mail;
use Redirect;
use Response;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('store');
        $this->middleware('IfActive')->except(['store','verify', 'upload']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Registration $request)
    {
        if (Code::where('mobile_no', '=', $request->PhoneNumber)->where('code', '=', $request->Code)->exists()) {
            if (User::where('user_code', '=', $request->rc)->exists()) {
                $member = User::create(array(
                    'firstname' => $request->FirstName,
                    'lastname' => $request->LastName,
                    'aoi' => $request->aoi,
                    'dob' => $request->dob,
                    'gender' => $request->gender,
                    'email' => $request->Email,
                    'mobile' => $request->PhoneNumber,
                    'password' => bcrypt($request->Password),
                    'nok_fn' => $request->nokfn,
                    'nok_ln' => $request->nokln,
                    'nok_pn' => $request->nokpn,
                    'nok_add' => $request->nokadd,
                    'bank_name' => $request->bn,
                    'bank_account' => $request->an,
                    'account_no' => $request->ban,
                    'whorefer' => $request->refer,
                    'refer' => $request->rc,
                    'ip' => $request->ip()
                ));
                $single = User::find($member->id);
                $single->user_code = AllFunction::getToken(6,$member->id);
                $single->Save();
                $request->session()->flash('success', 'You have been Registered Successfully, Please Fulfil Your Obligation To Start Getting Paid');
                $credentials = array(
                    'email' => $request->Email,
                    'password' => $request->Password
                );

                if (Auth::attempt($credentials)) {
                    return Redirect::to('dashboard');
                } else {
                    return Redirect::to('login');
                }
            } else {
                $request->session()->flash('error', 'Wrong Referral Code');
                return redirect('register')->withInput();
            }
        } else {
            $request->session()->flash('error', 'Wrong Validation Code');
            return redirect('register')->withInput();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function verify(){
        $user = Auth::user();
         $referby = User::where('user_code','=',$user->refer)->first();
        $notification = $referby->refer()->first()->getDescendantsAndSelf(7);
        $counted = $notification->count();
//        foreach($notification as $notify) {
//            dd($notify->getDescendants()->count());
//        }
        $dummy = array
        (
            array("12345",'2180',' Fidelity Bank', 'Francis', '1234567890', '3000'),
            array("12345",'2180',' GT Bank', 'Ken', '1234567890', '3000'),
            array("12345",'2180',' First Bank', 'Blessing', '1234567890', '3000'),
            array("12345",'2180',' FCM Bank', 'Dele', '1234567890', '3000'),
            array("12345",'2180',' Diamond Bank', 'Bola', '1234567890', '3000'),
            array("12345",'2180',' Union Bank', 'Amire', '1234567890', '3000'),
        );

        return view('submit', compact('user', 'notification', 'counted', 'dummy'));
    }

    public function upload(Request $request){
        $rules = array(
            'file' => 'image|max:3000',
        );


        $file = $request->file('file');
        $name = time(). $file->getClientOriginalName();
        $upload_success = $file->move('assets/images/proof', $name);
        if( $upload_success ) {
            $user = Auth::user();
            $data = [
                'first_name'=>$user->firstname,
                'Code'=>$user->user_code,
                'name' => $name
            ];
            Mail::send('emails.upload', $data, function ($message) use ($data){
                $destinationPath = public_path().'/assets/images/proof';
                $message->to('infinitypaul@live.com', 'MLF')->subject($data['first_name'],' Proof Of Payment');
                $message->attach($destinationPath."/".$data['name']);
            });
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }
}
