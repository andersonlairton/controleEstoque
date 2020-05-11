<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   //função que faz a verificação de permisoes 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   //aqui é verificado os campos,e definido suas regras de validação
        return [
            'nome'=>'required|max:100',
            'descricao'=>'required|max:255',
            'valor'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return[
            'required'=>':attribute não pode ser vazio.',
        ];
    }
}
