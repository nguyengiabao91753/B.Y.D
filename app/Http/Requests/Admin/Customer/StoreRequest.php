<?php

namespace App\Http\Requests\Admin\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'email'=> 'required|email|unique:customers,email',
            'password'=>'required|confirmed|min:5',
            'firstname'=>'required',
            'lastname'=>'required',
            'phone'=>'required|digits:10'
        ];
    }

    public function messages(): array
    {
        return[
            'email.required'=>'Please enter email',
            'email.unique'=>'Email is exist.Pleaser choose another email',
            'email.email'=>'Email must be a valid email address',
            'password.required'=>'Please enter password',
            'password.confirmed'=>'Password confirmation does not matach',
            'password.min'=>'Password must be at least 5 characters',
            'firstname.required'=>'Please enter first name',
            'lastname.required'=>'Please enter last name',
            'phone.required'=>'Please enter your phone number'
        ];
    }
}
