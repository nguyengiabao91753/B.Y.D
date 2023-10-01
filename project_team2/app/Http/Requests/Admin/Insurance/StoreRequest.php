<?php

namespace App\Http\Requests\Admin\Insurance;

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
            'provider_id'=> 'required',
            'policy_id'=> 'required',
            'category_id'=> 'required',
            'brand'=> 'required',
            'model'=> 'required',
            'pkr'=> 'required',
            'price'=> 'required',
            'rate'=> 'required'
            
        ];
    }
}
