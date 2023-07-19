<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required','max:255','unique:users','string'],
            'email_address' => ['required','email', 'unique:users','string','max:255'],
            'date_of_birth' => ['required','date','before_or_equal:today'],
            'password' => ['required', 'min:8', 'max:255','confirmed'],
            'password_confirmation' => ['required']
        ];
    }
}
