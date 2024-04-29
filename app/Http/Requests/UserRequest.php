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
    //   dd($this->all());
        return [
            'name'=>'required',
            'number'=>'required',
            'role_id'=>'required',
            'class'=>'required',
            'email'=>'required',
            'password' => 'required',
            'clubs' => 'required|array|min:1', // Ensure at least one club is selected
            'clubs.*' => 'exists:clubs,id',
            



        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>"name is required",
            'number.required'=>"number is required",
            'role_id.required'=>"role is required",
            'club_id.required'=>"club is required",
            'class.required'=>"class is required",
            'email.required'=>"email is required",
            'password.required'=>"password is required",

        ];
    }
}
