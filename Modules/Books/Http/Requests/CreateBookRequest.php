<?php

namespace Modules\Books\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' =>'bail|required|string',
            'author' =>'bail|required|string',
            'genre_id' =>'bail|required',
            'isbn' =>'bail|required|unique:books',
            'total_stock' =>'bail|required',
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
