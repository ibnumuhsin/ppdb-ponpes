<?php

namespace App\Http\Requests\Santri;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DokumenRequest extends FormRequest
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
            'foto'              =>  'required|mimes:jpg,jpeg,png|max:2048',
            'kk'                =>  'required|mimes:jpg,jpeg,png|max:2048',
            'ktp_ayah'          =>  'required|mimes:jpg,jpeg,png|max:2048',
            'ktp_ibu'           =>  'required|mimes:jpg,jpeg,png|max:2048',
            'skl'               =>  'required|mimes:jpg,jpeg,png|max:2048',
            'akta_kelahiran'    =>  'required|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
