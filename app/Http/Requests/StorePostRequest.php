<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        $rules = [
            'Judul' => [
                'required',
                'string',
                'max:225',
            ],
            'Diskon' => [
                'required',
                'digit:3',
            ],
            'Deskripsi' => [
                'required',
                'string',
                'max:225',
            ],'Tombol' => [
                'required',
                'string',
                'max:225',
            ],'Link_Tombol' => [
                'required',
                'string',
                'max:225',
            ],'Foto' => [
                'required',
                'string',
                'max:225',
            ],'Disable' => [
                'required',
                'string',
                'max:225',
            ],
        ];

        return $rules;
    }
}
