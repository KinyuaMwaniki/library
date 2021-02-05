<?php

namespace Modules\Books\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIssuanceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'book_id' => 'bail|required',
            'student_id' => 'bail|required',
            'date_issued' => 'bail|required',
            'date_expected' => 'bail|required',
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
