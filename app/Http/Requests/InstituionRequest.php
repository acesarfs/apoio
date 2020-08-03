<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstituionRequest extends FormRequest
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
            'sigla'   => 'required',
            'nome'    => 'required',
            'unidade' => 'required',
            'local'   => 'required',
        ];
    }
}