<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosFormRequest extends FormRequest
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
            'nome'              => ['required', 'max:50'],
            'descricao'         => ['required', 'max:256'],
            'precoUnitario'     => ['required','gt:0'],
            'qtdEstoque'        => ['required','numeric', 'between: 0,1000']
        ];
    }

    public function messages()
    {
        return [
            'required'  => "O campo ':attribute' é obrigatório.",
            'max'       => "O campo ':attribute' não deve ter mais que :max caracter",
            'gt'        => "O campo ':attribute' deve ser maior que :value.",
            'between'   => "O campo ':attribute' deve estar entre :min e :max.",
            'numeric'   => "O campo ':attribute' deve ser um número."
        ];
    }

    public function attributes(): array
    {
        return [
            'descricao'     => 'Descrição',
            'precoUnitario' => 'Preço unitário',
            'qtdEstoque'    => 'Quantidade em estoque',
        ];
    }


}
