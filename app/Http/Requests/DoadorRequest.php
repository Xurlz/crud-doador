<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoadorRequest extends FormRequest
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
            'nome' => 'required|max:200',
            'cpf' => [
                'required',
                'regex:/^\d{3}\.?\d{3}\.?\d{3}\-?\d{2}$/i',
            ],
            'email' => 'required|email|max:100',
            'telefone' => [
                'required',
                'regex:/^(\(?\d{2,3}\)?)?\d{4,5}-?\d{4}$/i'
            ],
            'endereco' => 'required|max:100',
            'data_nascimento' => 'required|date',
            'intervalo_doacao' => 'required',
            'valor_doacao' => [
                'required',
                'regex:/^\d{1,10}\.?\d{0,2}$/i',
                'notregex:/,/i'
            ],
            'forma_pagamento' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo :attribute é obrigatório.',
            'numeric' => 'Campo :attribute deve ser numérico',
            'regex' => 'Formato inválido no campo :attribute',
            'date' => 'Campo :attribute estar em formato de data',
            'notregex' => "Use '.' invés de ',' no campo :attribute",
            'email' => "Insira um endereço de email válido",
            'max' => 'Campo :attribute muito longo'
        ];
    }
}
