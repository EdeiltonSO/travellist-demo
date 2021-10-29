<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlacesPost extends FormRequest
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
            'name' => 'bail|required|unique:places|max:4',
            'visited' => 'required|in:0,1',
            'locais.*.name' => 'required',
        ];
    }

    public function withValidator($validator)
    {
        //Implementar uma lógica para validar ou invalidar o request;
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome da cidade é obrigatório rapaz!',
        ];
    }

    public function attributes()
    {
        return [
            'visited' => 'campo de visitado',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => 'algum dado',
        ]);
    }
}
