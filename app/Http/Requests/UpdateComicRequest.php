<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'description' => '|nullable|min:5|max:1000',
            'thumb' => 'url|nullable',
            'price'=> '|required|min:1|max:255',
            'title'=> '|required|min:5|max:255',
            'sale_date'=> '|required|',
            'series'=> '|required|min:5|max:255',
            'type'=> '|required|min:5|max:255'
        ];
    }
    public function messages()
    {
        return [
            'description.min' => 'Il campo descrizione deve avere :min caratteri',
            'thumb.required' => 'Il campo immagine è obbligatorio',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'title.required' => 'Il campo titolo è obbligatorio',
            'sale_date.required' => 'Il campo data è obbligatorio',
            'series.max' => 'Il campo serie non può superare i :max caratteri',
            'type.max' => 'Il campo tipo non può superare i :max caratteri'
        ];
    }
}
