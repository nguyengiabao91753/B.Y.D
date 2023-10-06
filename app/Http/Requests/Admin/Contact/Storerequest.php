<?php

namespace App\Http\Requests\Admin\Contact;

use Illuminate\Foundation\Http\FormRequest;

class Storerequest extends FormRequest
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
            
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required|unique:contacts,phone',
            'description' =>'required',
        ];
    }
    public function messages() : array
    {
        return[
            'firstname.required' =>'Please enter Firstname',
            'lastname.required' =>'Please enter Lastname',
            'email.required' =>'Please enter Email',
            'email.unique' =>'Email must email structor',
            'phone.required' =>'Please enter Phone',
            'phone.unique' =>'Please enter the correct phone number',
            'description.required' =>'Please enter Description',
        ];
    }
}
