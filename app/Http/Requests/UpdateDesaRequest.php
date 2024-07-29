<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDesaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'deskripsi' => 'required',
            'maps' => 'required|max:255',
            'kategori' => 'required|max:255',
            'kabupaten' => 'required|max:255',
            'gambar' => 'nullable|image|file',
        ];
    }
}
