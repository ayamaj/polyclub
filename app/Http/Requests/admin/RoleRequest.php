<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
    //  dd($this->all());
        return [
            'name'=>'required',
            'description'=>'required',
            'permissions' => 'required|array', // 'permissions' instead of 'permission-id'
            'permissions.*' => 'exists:permissions,id', //
        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>"name is required",
            'description.required'=>"description is required",
            'permissions.required' => "Permission is required",
            'permissions.array' => "Permissions must be an array",
            'permissions.*.exists' => "One or more selected permissions are invalid",


        ];
    }
}
