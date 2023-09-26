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
        // return [
        //     'enddate' => 'required|unique:accounts,enddate',
        //     'password'=>'required|unique:accounts,password'
        // ];
    }
    public function messages() : array
    {
        return[
            'enddater_id.required' =>'Please enter Enddate',
        ];
    }
}
