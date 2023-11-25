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
            'nome'=> ['required', 'max:50'],
            'precoUnitario'=> ['gt:0'],
            'qtdEstoque'=> ['gte:0', 'lte:1000']
        ];
    }

    public function messages()
    {
        return [
            'required' => "O campo ':attribute' é obrigatório.",
            'max' => "O campo ':attribute' não deve ter mais que :max caracter",
            'gt' => "O campo ':attribute' deve ser maior que :value.",
            'gte' => "O campo ':attribute' deve ser maior ou igual a :value.",
            'lte' => "O campo ':attribute' deve ser menor ou igual a :value."
        ];
    }

    public function attributes(): array
    {
        return [
            'precoUnitario' => 'preço unitário',
            'qtdEstoque'=>'quantidade em estoque',
        ];
    }


}
