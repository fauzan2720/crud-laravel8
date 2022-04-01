<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // membuat request validate
            'nim' => 'required|max:9|unique:users,nim',
            'name' => 'required|max:50',
            'prodi' => 'required|max:50',
            'email' => 'required|max:50|unique:users,email',
            'phone_number' => 'required|max:13|unique:users,phone_number',
            'address' => 'required|max:100',
        ];
    }
}
