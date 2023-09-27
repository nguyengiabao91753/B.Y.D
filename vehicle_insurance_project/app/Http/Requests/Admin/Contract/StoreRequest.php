<?php

namespace App\Http\Requests\Admin\Contract;

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
            'account_id' => 'required|unique:contract,account_id',
            'policy_id' => 'required|unique:contract,policy_id',
            'StartDate' => 'required|unique:contract,StartDate',
            'EndDate' => 'required|unique:contract,EndDate',

        ];
    }
    public function messages() : array
    {
        return[
            'account_id.required' =>'Please enter AccountID',
            'policy_id.required' =>'Please enter PolicyID',
            'StartDate.required' =>'Please enter StartDate',
            'EndDate.required' =>'Please enter Enddate',
        ];
    }
}
