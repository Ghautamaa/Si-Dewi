<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAkunRequest extends FormRequest
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
            'nama' => 'sometimes|string|max:255',
            'no_telp' => 'sometimes|string|max:20',
            'email' => 'sometimes|email|unique:akun,email,' . $this->route('id'),
            'foto' => 'nullable|image|file|max:2048',
        ];
    }
}
