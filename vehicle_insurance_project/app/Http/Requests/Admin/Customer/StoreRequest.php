<?php

namespace App\Http\Requests\Admin\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'firstname'=>'required|unique:customers,firstname',
            'lastname'=>'required|unique:customers,lastname',
            'email'=>'required|unique:customers,email',
            'phone'=>'required|unique:customers,phone',
            'address'=>'required|unique:customers,address',
            //
        ];
    }
}
