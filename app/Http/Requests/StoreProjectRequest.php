<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'url' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.string' => 'Il titolo deve essere una stringa',

            'description.required' => 'La descrizione è obbligatoria',
            'description.string' => 'La descrizione deve essere una stringa',

            'url.required' => 'L\'url è obbligatorio',
            'url.string' => 'L\'url deve essere una stringa',
        ];
    }
}