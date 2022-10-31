<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_lengkap'      =>      'required|string|max:255',
            'jenis_kelamin'     =>      'required|string|max:255',
            'tmp_lahir'         =>      'required|string|max:255',
            'tgl_lahir'         =>      'required|date',
            'email'             =>      ['required',
                                        'string',
                                        'email',
                                        'max:255',
                                        'unique:users,email,' . Auth::user()->id],
            'no_telp'           =>  'nullable|min_digits:12|max_digits:13',
            'foto_profile'      => 'nullable|mimes:jpg,jpeg,png|max:1048',
            'password'          =>      'nullable|min:8',

        ];
    }
}