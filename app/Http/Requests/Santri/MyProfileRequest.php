<?php

namespace App\Http\Requests\Santri;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class MyProfileRequest extends FormRequest
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
            'email'             =>      ['required',
                                        'string',
                                        'email',
                                        'max:255',
                                        'unique:users,email,' . Auth::user()->id],
            'no_telp'           =>      'nullable|min_digits:12|max_digits:13',
            'foto_profile'      =>      'nullable|mimes:jpg,jpeg,png|max:1048',
            'password'          =>      'nullable|min:8',
        ];
    }
}