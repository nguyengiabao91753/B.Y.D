<?php

namespace App\Http\Requests\Admin\Payment;

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
            'paymentname' => 'required|unique:payment,paymentname',
        ];
    }
    public function messages() : array
    {
        return[
            'paymentname.required' =>'Please enter Payment Name',
        ];
    }
}
