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
            'enddate' => 'required',
            'insurance_id' =>'required',
            'customer_id' =>'required',
            'startdate' => 'required',
            'price' => 'required',
        ];
    }
    public function messages() : array
    {
        return[
            'custormer_id.required'=>'The customer id field is required.',
            'insurance_id.required'=>'The insurane id field is required.',
            'enddate.required' =>'Please enter Enddate',
            'startdate.required' =>'Please enter Startdate',
            'price.required' =>'Please enter Price',
        ];
    }
}
