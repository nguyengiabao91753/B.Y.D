<?php

namespace App\Http\Requests\Admin\Contacts;

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
            //
            // 'id' => 'required|unique:contacts,id',
            'description' => 'required|unique:contacts,description',
        ];
    }
    public function messages() : array
    {
        return[
            'firstname.required' =>'Please enter Firstname',
            'lastname.required' =>'Please enter Lastname',
            'email.required' =>'Please enter Email',
            'phone.required' =>'Please enter Phone',
            'description.required' =>'Please enter Description',
        ];
    }
}
