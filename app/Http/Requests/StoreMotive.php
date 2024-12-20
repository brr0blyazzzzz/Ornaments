<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMotive extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'motive_title' => 'required',
            'motive_source'=> 'required',
            'motive_date' => 'required',
            'motive_notes'=> 'nullable',
            'motive_img' => 'nullable'
        ];
    }
}
