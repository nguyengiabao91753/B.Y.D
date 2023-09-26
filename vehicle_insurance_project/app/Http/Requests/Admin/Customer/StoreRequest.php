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
            'FirstName'=>'required|unique:customers,FirstName',
            'LastName'=>'required|unique:customers,LastName',
            'Email'=>'required|unique:customers,Email',
            'Phone'=>'required|unique:customers,Phone',
            'Address'=>'required|unique:customers,Address',
            //
        ];
    }
}
