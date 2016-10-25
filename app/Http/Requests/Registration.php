<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class Registration extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'FirstName' => 'required',
             'LastName' => 'required',
            'Email' => 'required|email|unique:users',
            'PhoneNumber' => 'required|numeric|unique:users,mobile|min:11',
            'Code' => 'required',
            'aoi' => 'required',
            'Password' => 'required|min:6',
            'RePassword' => 'required|same:Password',
            'dob' => 'required',
            'gender' => 'required',
            'nokfn' => 'required',
            'nokln' => 'required',
            'nokpn' => 'required|numeric',
            'nokadd' => 'required',
            'bn' => 'required',
            'an' => 'required',
            'ban' => 'required|numeric|unique:users,account_no|min:10',
            'refer' => 'required',
            'regcat' => 'required',
        ];
    }

//    protected function formatErrors(Validator $validator)
//    {
//        return $validator->errors()->all();
//    }

    public function messages()
    {
        return [
            'FirstName.required' => 'First Name is required',
            'LastName.required'  => 'Last Name is required',
            'PhoneNumber.required' => 'Mobile Number Is Required',
            'aoi.required' => 'Area Of Interest is Needed',
            'RePassword.same' => 'Your Password Do Not Match',
            'dob.required' => 'Your Date Of Birth is Needed',
            'nokfn.required' => 'Next Of Kin Full Name is Needed',
            'nokln.required'  => 'Next Of Kin Last Name is required',
            'nokpn.required' => 'Next Of Kin Mobile Number Is Required',
            'nokadd.required' => 'Next Of Kin Address is Needed',
            'bn.required' => 'What is Your Bank Name',
            'an.required'  => 'Account Name is required',
            'ban.required' => 'Account Number Is Required',
            'refer.required' => 'How did you know about us',
            'regcat.required' => 'You Must Select an Option',
            'rc.numeric' => 'Your code must be a number',
            'ban.unique' => 'Account No Already Taken'
        ];
    }
}
