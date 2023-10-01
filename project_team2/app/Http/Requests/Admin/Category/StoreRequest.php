<?php

namespace App\Http\Requests\Admin\Category;

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
<<<<<<< HEAD
            'name' => 'required|unique:categories,name',
        ];
    }

    public function messages (): array
    {
        return [
            'name.required' => 'Please enter Category Name',
            'name.unique' => 'This Name already exists'
=======
            //
            'name'=>'required'
>>>>>>> 97c292d6c4bec799b1212847cc7966f183b6dfa5
        ];
    }
}
