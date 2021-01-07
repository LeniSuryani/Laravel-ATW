<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|unique:user,username|gte:10',
            'email' => 'required|email'
        ];
    }

    function messages()
    {
        return [
            'nama.required' => ' Field Nama wajib di isi',
            'username.required' => 'Silahkan isi username Anda',
            'email.required' => 'email anda tidak falid, silahkan isi dengan benar',
            'username.unique' => 'Username tersebut sudah terdaftar'
        ];
    }
}
