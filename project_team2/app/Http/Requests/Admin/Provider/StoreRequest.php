<?php

namespace App\Http\Requests\Admin\Provider;

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
            'name'=>'required|unique:providers,name',
            'image'=>'required|mimes:jpg,png,bmp,jpeg'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Please enter name provider',
            'name.unique'=>'Name provider is exist. Please enter again',
            'image.required'=>'Please enter provider image',
            'image.mimes'=>'Image must be jpg,png,bmp,jpeg'
        ];
    }
}
