<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSedekahRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nama_jenazah' => 'required|string',
            'tanggal_bayar' => 'required|date',
            'status' => 'required|in:terbayar,belum'

        ];
    }
}
