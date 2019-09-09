<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'numtel' => 'required',
            'email' => 'required|email',
            'login' => 'required',
            'numerocin' => 'required',
            'photo' => 'required|max:10000|mimes:png,jpeg,jpg',
            'photocin' => 'required|max:10000|mimes:png,jpeg,jpg,doc,pdf',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required',
        ];
    }
}
