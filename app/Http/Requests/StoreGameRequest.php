<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class StoreGameRequest extends FormRequest
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
            'title'=> 'required|min:2|max:45',
            'publisher'=>'required|min:3|max:150',
            'plot'=> 'required|min:10|max:255',
            'year'=>'required|integer|digits:4',
            'cover'=>'required|image|mimes:jpg,png,webp,jpeg'
        ];
    }

    public function messages()
    {
        return[
            'required'=>'Il campo :attribute è obbligatorio',
            'min'=>'Il campo :attribute richiede almeno :min caratteri',
            'max'=>'Il campo :attribute deve essere di :max caratteri',
            'integer'=>'Il campo :attribute deve essere un numero',
            'image'=>'Il campo :attribute deve essere un\'immagine',
            'mimes'=>'Le estensioni accettate sono :values'
        ];
    }
}
