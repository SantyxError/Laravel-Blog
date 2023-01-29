<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    // REQUISITOS A CUMPLIR

    public function rules()
    {
        return [
            // El título del post debe ser obligatorio, y de al menos 5 caracteres de longitud
            'titulo' => 'required|min:5',
            // El contenido del post debe ser obligatorio, y de al menos 50 caracteres de longitud
            'contenido' => 'required|min:50'
        ];
    }


    // MENSAJES DE ERROR PERSONALIZADOS
    public function messages()
    {
        return [
            'titulo.required' => 'El título es obligatorio',
            'titulo.min' => 'El título es demasiado corto (al menos 5 caracteres)',
            'contenido.required' => 'El contenido es obligatorio',
            'contenido.min' => 'El contenido es demasiado corto (al menos 50 caracteres)'
        ];
    }
}
