<?php

namespace App\Http\Requests\Santri;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BiodataRequest extends FormRequest
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
            'nama_lengkap'      =>  'required|min:1|max:50',
            'nisn'              =>  'required|numeric|min:10|max_digits:10',
            'nik'               =>  'required|numeric|min:16|max_digits:16',
            'jenis_kelamin'     =>  'required|string',
            'tmp_lahir'         =>  'required|string|min:1|max:20',
            'tgl_lahir'         =>  'required'
        ];
    }
}
