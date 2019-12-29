<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required',
            'orden' => 'required'
        ];
    }

    public function messages()
    {
        return [
            /*'imagen.required' => 'The imagen principal field is required.'*/
        ];
    }   
}


/*
    public function rules()
    {
        return [
            'titulo' => 'required|min:4|unique',
            'breve' => 'required|min:4',
            'resena' => 'required|min:4',
            'descripcion' => 'required|mimes:jpg,jpeg,bmp,png',
            'caracteristica' => 'required',
            'ficha' => 'required|mimes:pdf',
            'orden' => 'required|max:4'
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'The Plano is required!',
            'descripcion.mimes' => 'The Imagenes!',
        ];
    }        
*/