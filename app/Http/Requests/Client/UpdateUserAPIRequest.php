<?php

namespace App\Http\Requests\Client;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserAPIRequest extends FormRequest
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
            'email' => ['nullable', 'string', 'unique:users,email,'.$this->route('user')],
            'name' => ['nullable', 'string'],
            'is_active' => ['boolean'],
            'user_type' => [Rule::in([User::TYPE_ADMIN, User::TYPE_USER])],
        ];
    }
}
