<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome'          => ['required','string', 'min:2', 'max:256'],
            'cpf'           => ['required','string', 'size:11'],
            'telefone'      => ['required','string', 'between:10,11'],

            'rua'           => ['required','max:128'],
            'numero'        => ['required','string','max:10'],
            'bairro'        => ['required','max:128'],
            'cidade'        => ['required','max:128'],
            'estado'        => ['required','max:128'],

        ];
    }

    public function messages()
    {
        return [
            'required'  => "O campo ':attribute' é obrigatório",
            'max'       => "O campo ':attribute' deve ter no maximo :max caracteres",
            'min'       => "O campo ':attribute' deve ter no mínimo :min caracteres",
            'string'    => "O campo ':attribute' deve ser texto",
            'size'      => "O campo ':attribute' deve ter :value caracteres",
            'between'   => "o campo ':attribute' deve ter entre :min e :max caracteres."
        ];
    }
}
