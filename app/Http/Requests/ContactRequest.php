<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

            return [
                'name'=> 'required|min:3',
                'email'=> 'required|max:100',
                'number'=> 'required',
                'user_message'=> 'required|min:3',
            ];

    }
    public function messages(): array
    {
        return [
            'name.required'=>'Devi inserire il tuo nome',
            'email.required'=> "Devi inserire la tua email",
            'number.required'=>'Devi inserire il tuo numero',
            'user_message.required'=>'Devi inserire il messaggio'
        ];

    }
}
