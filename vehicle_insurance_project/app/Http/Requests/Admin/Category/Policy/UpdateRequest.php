<?php

namespace App\Http\Requests\Admin\Category\Policy;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'policyname' => 'required|unique:Policy,policyname,'.$this->policy_id,
        ];
    }

    public function messages (): array
    {
        return [
            'policyname.required' => 'Please enter Policy Name',
            'policyname.unique' => 'This Policy Name already exists',
        ];
    }
}
