<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireRequest extends FormRequest
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
            'class'=>'required',
            'email'=>'required',
            'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'club_id'=>'required',

        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>"you didn't fill this field (name)",
            'number.required'=>"you didn't fill this field (number)",
            'class.required'=>"you didn't fill this field (class)",
            'email.required'=>"you didn't fill this field (email)",
            'password.required'=>"use 8 or more characters with a mix of lettre, numbers & symbols",
            'club_id.required'=>"club is required",

        ];
    }
}
