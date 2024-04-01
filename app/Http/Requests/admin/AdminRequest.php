<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // dd($this->all());
        return [
            'name'=>'required',
            'role_id'=>'required',
            'image'=>'required',
            'email'=>'required',
            'password'=>'required'

        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>"name is required",
            'role_id.required'=>"role is required",
            'image.required'=>"image is required",
            'email.required'=>"email is required",
            'password.required'=>"password is required"
        ];
    }
}
