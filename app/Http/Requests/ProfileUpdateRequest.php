<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class  ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'avatar' => ['nullable', 'image', 'max:3000'],
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:200', 'unique:users,email,'.auth()->user()->id],
            'phone' => ['required', 'phone:ZA', 'unique:users,phone,'.auth()->user()->id],

        ];
    }
}
