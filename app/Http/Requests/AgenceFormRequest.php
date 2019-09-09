<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgenceFormRequest extends FormRequest
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
            'nomagence' => 'required',
            'siteweb' => 'required',
            'nif' => 'required',
            'description' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'logo' => 'required',
        ];
    }
}
