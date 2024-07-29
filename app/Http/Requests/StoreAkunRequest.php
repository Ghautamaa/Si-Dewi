<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAkunRequest extends FormRequest
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
            'nama' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|email|unique:akun,email',
            'foto' => 'required|image|file|max:2048',
            'role' => 'required|string|in:admin,user',
        ];
    }
}
