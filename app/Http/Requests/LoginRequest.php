<?php

namespace App\Http\Requests;

use App\Dto\LoginDto;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'max:50'],
            'password' => ['required'],
        ];
    }


    /**
     * Get the validated data and create a LoginDto.
     *
     * @return LoginDto
     */
    public function toDto(): LoginDto
    {
        $validated = $this->validated();

        return new LoginDto(
            $validated['email'],
            $validated['password'],
        );
    }
}
