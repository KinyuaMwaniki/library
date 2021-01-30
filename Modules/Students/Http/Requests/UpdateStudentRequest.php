<?php

namespace Modules\Students\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'student_number' =>['bail', 'required', Rule::unique('students')->ignore($this->route('student'))],
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
