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
            'nome'              => ['required', 'string', 'max:50'],
            'descricao'         => ['required', 'string', 'max:256'],
            'precoUnitario'     => ['required','gt:0'],
            'qtdEstoque'        => ['required','numeric', 'between: 0,1000'],
            'categoria_id'      => ['required','string','exists:categorias,id']
        ];
    }

    public function messages()
    {
        return [
            'required'  => "O campo ':attribute' é obrigatório.",
            'string'    => "O campo ':attribute' deve ser texto",
            'max'       => "O campo ':attribute' não deve ter mais que :max caracter",
            'gt'        => "O campo ':attribute' deve ser maior que :value.",
            'between'   => "O campo ':attribute' deve estar entre :min e :max.",
            'numeric'   => "O campo ':attribute' deve ser um número.",
            'exists'    => "O campo ':attribute' selecionado é inválido."
        ];
    }

    public function attributes(): array
    {
        return [
            'descricao'     => 'Descrição',
            'precoUnitario' => 'Preço unitário',
            'qtdEstoque'    => 'Quantidade em estoque',
            'categoria_id'  => 'Categoria'
        ];
    }


}
