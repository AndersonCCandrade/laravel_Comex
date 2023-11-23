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
            'precoUnitario'=>[
                function ($attribute, $value, $fail) {
                    if ($value <= 0 ) {
                        $fail('O campo preço unitario deve ser maior que 0.');
                    }
                }],
            'qtdEstoque'=>[function ($attribute, $value, $fail) {
                    if ($value < 1 ||$value >1000 ) {
                        $fail('O campo quantidade em estoque deve estar entre 1 e 1000.');
                    }
                }]
        ];
    }


}
