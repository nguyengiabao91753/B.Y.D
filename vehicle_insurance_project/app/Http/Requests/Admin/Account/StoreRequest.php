<?php

namespace App\Http\Requests\Admin\Account;

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
    public function rules(): array
    {
        return [
            // 'account_id'=>'required|unique:accounts,account_id',
            // 'customer_id'=>'required|unique:accounts,customer_id',
            'user' => 'required|unique:accounts,user',
            'password'=>'required|unique:accounts,password',
        ];
    }
    public function messages() : array
    {
        return[
            'customer_id.required' =>'Please enter Customer',
            'user.required' =>'Please enter User',
            'password.required' =>'Please enter Password',
        ];
    }
}
