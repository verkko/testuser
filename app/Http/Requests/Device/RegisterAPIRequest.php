<?php

namespace App\Http\Requests\Device;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAPIRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'username' => ['nullable', 'string'],
            'password' => ['nullable', 'string'],
            'email' => ['nullable', 'string', 'unique:users,email'],
            'name' => ['nullable', 'string'],
            'is_active' => ['boolean'],
            'role' => ['integer', 'required'],
        ];
    }
}
