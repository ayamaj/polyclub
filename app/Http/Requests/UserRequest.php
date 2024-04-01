<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd($this->all());
        return [
            'name'=>'required',
            'number'=>'required',
            'role_id'=>'required',
            'cin'=>'required',
            'class'=>'required',
            'image'=>'required',
            'email'=>'required',
            'password'=>'required'

        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>"name is required",
            'number.required'=>"number is required",
            'role_id.required'=>"role is required",
            'cin.required'=>"cin is required",
            'class.required'=>"class is required",
           'image.required'=>"image is required",
            'email.required'=>"email is required",
            'password.required'=>"password is required"
        ];
    }
}
