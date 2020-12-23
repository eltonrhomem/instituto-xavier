<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunosRequest extends FormRequest
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
        //return [];
        return [
            'nmaluno' => 'required|max:100',
            'nomeguerra'=> 'required|max:100',
            'datanascimento' => 'required',
            'tiposanguineo' => 'required',
            'sexo' => "required|in:[M,F]",
        ];
    }

    public function messages()
    {
        return [
            'nmaluno.required' => 'Nome do aluno é obrigatório',
            'nmaluno.max' => 'Nome do aluno deve conter 100 caracteres no máximo',
            'nomeguerra.required' => 'Nome de guerra é obrigatório',
            'datanascimento.required' => 'Data de nasicmento é obrigatório',
            'tiposanguineo.required' => 'Tipo sanguíneo é obrigatório',
            'sexo.required' => 'O campo sexo é obrigatório',
            'sexo.in' => 'Sexo inválido',
        ];
    }
}
