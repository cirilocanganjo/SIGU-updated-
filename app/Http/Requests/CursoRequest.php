<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            'nome' => 'required',
            'turma' => 'required',
            'mensalidade' => 'required',
            'valor_matricula' => 'required',
            'valor_confirmacao' => 'required',
            'valor_recurso' => 'required',
            'valor_exame_especial' => 'required',
        ];
    }
}
