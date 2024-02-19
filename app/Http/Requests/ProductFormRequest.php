<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:100',
            'price' => 'required|min:0.01|decimal:0,2'
        ];
    }
    public function messages() {

        return [
            'name.required' => 'Il campo non può essere vuoto',
            'name.min' => 'Il nome non può essere inferiore a 3 caratteri',
            'name.max' => 'Il nome non può essere superiore a 100 caratteri',

            'price.required' => 'Il campo non può essere vuoto',
            'price.min' => 'Il prezzo non può essere inferiore a 0.01€',
            'price.decimal' => 'Inserisci un numero (con massimo 2 cifre decimali)',
        ];
    }
}
