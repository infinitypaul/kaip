<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()) {
            return true;
        }else{
            return false;
        }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'email|unique:users',
            'mobile' => 'numeric|unique:users,mobile|min:11',
            'password' => 'min:6',
            'repassword' => 'same:password',
            'nok_pn' => 'numeric',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Your Email Address isnt Not Valid',
            'email.unique'  => 'Email Address has been taken',
            'mobile.numeric' => 'Mobile Number Is is Not Valid',
            'mobile.unique' => 'Mobile Number has been taken',
            'repassword.same' => 'Your Password Do Not Match',
            'nok_pn.numeric' => 'Next Of Kin Mobile Number Is Not Valid'
        ];
    }
}
