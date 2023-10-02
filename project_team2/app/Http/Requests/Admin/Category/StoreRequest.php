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

            'name' => 'required|unique:categories,name',
        ];
    }

    public function messages (): array
    {
        return [
            'name.required' => 'Please enter Category Name',
            'name.unique' => 'This Name already exists'

<<<<<<< HEAD
            //

=======
>>>>>>> 52f2d3d10d34520b0a14454815079c4684ae7dce
        ];
    }
}
