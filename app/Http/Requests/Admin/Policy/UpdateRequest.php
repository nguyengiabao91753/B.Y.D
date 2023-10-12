<?php

namespace App\Http\Requests\Admin\Policy;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'image'=>'required|mimes: jpg ,png, bmp, jpeg',
            'name' => 'required|unique:Policy,name,'.$this->id
            
        ];
    }

    public function messages (): array
    {
        return [
            'name.required' => 'Please enter Policy Name',
            'name.unique' => 'This Policy Name already exists',
            'image.required'=>'Please enter Policy image',
            'image.mimes'=>'Image must be jpg,png,bmp,jpeg'
        ];
    }
}
