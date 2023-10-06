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
        ];
    }
    public function messages() : array
    {
        return[
            'custormer_id.required'=>'Please enter CustomerID',
            'insurance_id.required'=>'Please enter InssuranceID',
            'enddate.required' =>'Please enter Enddate',
        ];
    }
}
