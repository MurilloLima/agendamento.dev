<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositoRequest extends FormRequest
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
            'file' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg|max:3000'
        ];
    }
    public function messages()
    {
        return [
            'file.required' => 'Ops! Faltou anexar o contrato.',
            'file.mimes' => 'Ops! Formato de arquivo inválido',

        ];
    }
}
