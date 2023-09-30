<?php

namespace App\Http\Requests\Admin\Contract;

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
            'id' => 'required|unique:contract,id',
            'customer_id' => 'required|unique:contract,customer_id',
            'insurance_id' => 'required|unique:contract,insurance_id',
            'enddate' => 'required|unique:contract,enddate',
        ];
    }
    public function messages() : array
    {
        return[
            'id.required' =>'Please enter ID',
            'customer_id.required' =>'Please enter Customer ID',
            'insurance_id.required' =>'Please enter Insurance ID',
            'enddate.required' =>'Please enter Enddate',
        ];
    }
}
