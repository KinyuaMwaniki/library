<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' =>'bail|required|string',
            'middle_name' =>'bail|required|string',
            'last_name' =>'bail|required|string',
            'name' =>'bail|string',
            'email' =>'bail|required|unique:users|email',
            'birthday' =>'bail|date',
            'gender' =>'bail|string',
            'telephone' =>'bail|required|string',
            'id_no' =>'bail|required|string',
            'employee_id' =>'bail|required|integer',
            'department_id' =>'bail|integer',
            'can_access' =>'bail|required|string',
            'password' =>'bail|required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
