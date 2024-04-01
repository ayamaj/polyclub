<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClubRequest extends FormRequest
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
        return [
            'name'=>'required',
            'description'=>'required',
            'president'=>'required',
            'image'=>'required',
            'date'=>'required'
        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>"name is required",
            'description.required'=>"description is required",
            'president.required'=>"president is required",
            'image.required'=>"image is required",
            'date.required'=>"date is required"

        ];
    }
}
