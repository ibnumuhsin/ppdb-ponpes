<?php

namespace App\Http\Requests\Santri;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OrangTuaRequest extends FormRequest
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
            'nama_ayah'                 =>  'required|string|max:50',
            'pendidikan_ayah'           =>  'required|string|max:50',
            'pekerjaan_ayah'            =>  'required|string|max:50',
            'nama_ibu'                  =>  'required|string|max:50',
            'pendidikan_ibu'            =>  'required|string|max:50',
            'pekerjaan_ibu'             =>  'required|string|max:50',
            'no_telp_ortu'              =>  'required|numeric|digits_between:12,13',
            'penghasilan_ortu'          =>  'required|numeric',
            'nama_wali'                 =>  'nullable|string|max:50',
            'pendidikan_wali'           =>  'nullable|string|max:50',
            'pekerjaan_wali'            =>  'nullable|string|max:50',
            'no_telp_wali'              =>  'nullable|numeric|digits_between:12,13',
            'penghasilan_wali'          =>  'nullable|numeric',
        ];
    }
}