<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SiswaRequest extends FormRequest
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
            'nama_lengkap'      =>  'required|max:50|string',
            'nisn'              =>  'required|numeric|min_digits:10|max_digits:10',
            'nik'               =>  'required|numeric|min_digits:16|max_digits:16',
            'jenis_kelamin'     =>  'required',
            'tmp_lahir'         =>  'required|string|max:20',
            'tgl_lahir'         =>  'required|date',
            'email'             =>  'required|email',
            'no_telp'           =>  'required|numeric|max_digits:13|nullable',
            'foto_profile'      =>  'mimes:png,jpg,jpeg|max:2048',
            'password'          =>  'nullable|min_digits:8|string',
        ];
    }
}
