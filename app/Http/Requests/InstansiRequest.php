<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InstansiRequest extends Request
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
            'nama_instansi'=>'required|string|max:50',
            'alamat'=>'required|string',
            'notelp'=>'required|string|max:20',
            'harga'=>'required|numeric',
        ];
    }
}
