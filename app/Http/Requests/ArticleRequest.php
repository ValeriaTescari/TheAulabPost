<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:10|max:200',
            'subtitle' => 'required|min:10',
            'body' => 'required|min:50',
            'img' => 'mimes:jpg,png'
        ];
    }

    public function messages()
    {
       return [ 'title.required'=>'Il titolo dell\'articolo è richiesto',
            'subtitle.required'=>'Il sotttotilo è richiesto',
            'body.required'=>'Il corpo del testo è richiesto',
            'title.min'=>'Il titolo dell\'articolo è troppo corto',
            'subtitle.min'=>'Il sotttotilo è troppo corto',
            'body.min'=>'Il corpo del testo è troppo corto',
            'title.max'=>'Il titolo dell\'articolo è troppo lungo',
            'img.mimes' => 'Il file deve essere jpg o png'
         ];
    }
}
