<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'titre'=>'required',
            'description'=>'required',
            'image'=>'required',
            'date'=>'required',
            'duration'=>'required',
            'place'=>'required',

            'image_club'=>'required',
        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>"you didn't fill this field (name)",
            'description.required'=>"you didn't fill this field (description)",
            'image.required'=>"you didn't fill this field (image)",
            'date.required'=>"you didn't fill this field (date)",
            'duration.required'=>"you didn't fill this field (duration)",
            'place.required'=>"you didn't fill this field (place)",
            'image_club.required'=>"you didn't fill this field (image_club)",
        ];
    }
}
