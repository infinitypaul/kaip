<?php

namespace App\Http\Controllers;

use App\Code;
use App\Http\Requests\Registration;
use App\Http\Requests\UpdateProfile;
use App\Mail\WelcomeMail;
use App\Pool;
use App\Referral;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use AllFunction;
use Illuminate\Support\Facades\Validator;
use Inwave\LaravelUploadcare\Facades\Uploadcare;
use Mail;
use Redirect;
use Response;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('store');
        $this->middleware('IfActive')->except(['store','verify']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $downline = User::where('refer','=', $user->user_code)->where('active','=', 1)->get();
        if(is_null($user->referral->first())) {
            $mycount = 0;
            return view('home', compact('user', 'mycount', 'notification', 'downline'));
        } else {

            $mylevel = $user->referral()->first()->getDescendants();
            //$notification = $user->refer()->first()->getDescendants(7);

            $mycount = $mylevel->count();
            foreach ($user->referral as $role) {

            }
        }


        //echo $level = $notification->count();
        return view('home', compact('user', 'mycount', 'notification', 'downline'));
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
            if($request->refer == 1 ){
                if ($request->has('rc')) {
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
                            'ip' => $request->ip(),
                            'category' => $request->regcat
                        ));
                        $single = User::find($member->id);
                        $single->user_code = AllFunction::getToken(6, $member->id);
                        $single->Save();
                        $referby = User::where('user_code', '=', $single->refer)->first();
                        $descendant = $referby->referral()->first()->getDescendantsAndSelf()->count();
                        $downline = User::where('refer','=', $single->refer)->count();

                        if ($downline > 3) {
                            // dd($descendant);
                            Pool::create(array(
                                'user_id' => $member->id,
                                'refer_id' => $referby->id
                            ));
                        }

                    } else {
                        $request->session()->flash('error', 'Wrong Referral Code');
                        return redirect('register')->withInput();
                    }
                }
            } else {
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
                    'refer' => $request->rc,
                    'ip' => $request->ip(),
                    'category' => $request->regcat
                ));
                $single = User::find($member->id);
                $single->user_code = AllFunction::getToken(6,$member->id);
                $single->Save();
                //dd('stop');
                Pool::create(array(
                    'user_id' => $member->id
                ));
            }

            $when = Carbon::now()->addMinutes(5);
           // Mail::to($single->email)->later($when, new WelcomeMail($single));
            Mail::to($single->email)->send( new WelcomeMail($single));


            $request->session()->flash('success', 'You have been Registered Successfully, Please Fulfil Your Obligation To Start Getting Paid');

           // Mail::to($single)->later(new WelcomeMail($single));
            $credentials = array(
                'email' => $request->Email,
                'password' => $request->Password
            );

            if (Auth::attempt($credentials)) {
                //dd('heyi');
                return Redirect::to('dashboard');
            } else {
                return Redirect::to('login');
            }
          //  dd('hey');
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
        $user = Auth::user();
        $mylevel = $user->referral()->first()->getDescendants();
        //$notification = $referby->refer()->first()->getDescendantsAndSelf(7);
        $mycount = $mylevel->count();
        return view('update', compact('user', 'mycount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfile $request, $id)
    {
        $user = User::findorFail($id);
        if ($request->has('email')) $user->email = $request->input('email');
        if ($request->has('mobile')) $user->mobile = $request->input('mobile');
        if ($request->has('aoi')) $user->aoi = $request->input('aoi');
        if ($request->has('gender')) $user->gender = $request->input('gender');
        if ($request->has('nok_fn')) $user->nok_fn = $request->input('nok_fn');
        if ($request->has('nok_ln')) $user->nok_ln = $request->input('nok_ln');
        if ($request->has('nok_add')) $user->nok_add = $request->input('nok_add');
        if ($request->has('nok_pn')) $user->nok_pn = $request->input('nok_fn');
        if ($request->has('dob')) $user->dob = $request->input('dob');
        if ($request->has('password')) $user->password = bcrypt($request->input('password'));
        if($request->input('image'))$user->location = Uploadcare::getFile($request->input('image'))->getUrl();
        $user->save();
        $request->session()->flash('success', 'Profile Successfully Upfated');
        return Redirect::to('dashboard/'.$id.'/edit');
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
        if(empty($user->refer)) {
            return view('above', compact('user'));
        }else {
           // $referby = User::find(1);
            $referby = User::where('user_code','=',$user->refer)->first();
            $notification = $referby->referral()->first()->getAncestorsAndSelf();
            $counted = $notification->count();
            $descendant = $referby->referral()->first()->getDescendantsAndSelf()->count();
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
           // dd($descendant);
            if($descendant <= 3 ){
                return view('submit', compact('user', 'notification', 'counted', 'dummy'));
            } else {
                return view('above', compact('user'));
            }
        }




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

    public function GiveHelp(){
        $user = Auth::user();
        $mylevel = $user->refer()->first()->getDescendants();
        $mycount = $mylevel->count();
        return view('help', compact('user', 'mycount'));
    }

    public function Genealogy(){

    }
}
