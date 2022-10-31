<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BuktiKelulusanRequest extends FormRequest
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
        'logo_yayasan'      => 'mimes:jpg,jpeg,png|max:1048',
        'logo_ponpes'       => 'mimes:jpg,jpeg,png|max:1048',
        'header'            => 'required|max:225|string',
        'alamat'            => 'required|max:225|string',
        'thn_ajaran'        =>  'required|max:225|string',
        'judul'             => 'required|max:225|string',
        'body_1'            => 'required|string',
        'body_2'            => 'required|string',
        'tempat'            => 'required|string',
        'tanggal'           => 'required|date',
        'jabatan_panitia'   => 'required|max:225|string',
        'nama_panitia'      => 'required|max:225|string',
        'ttd_stample_panitia'       => 'mimes:jpg,jpeg,png|max:1048',
        'stample'           => 'mimes:jpg,jpeg,png|max:1048'
        ];
    }
}
