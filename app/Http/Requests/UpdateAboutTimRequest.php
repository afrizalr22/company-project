<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutTimRequest extends FormRequest
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
            'poster' => ['sometimes', 'image', 'mimes:png,jpg,jpeg'],
            'subheading' => ['required', 'string', 'max:255'],
            'heading' => ['required', 'string', 'max:255'],
            'article' => ['required', 'string', 'max:10000'],
        ];
    }
}
