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
            'PolicyName' => 'required|unique:insurancepolicies,PolicyName,'.$this->PolicyID,
        ];
    }

    public function messages (): array
    {
        return [
            'PolicyName.required' => 'Please enter Policy Name',
            'PolicyName.unique' => 'This Policy Name already exists',
        ];
    }
}
