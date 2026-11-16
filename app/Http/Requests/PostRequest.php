<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:250',
            'author' => 'required|min:3|max:250',
            'content' => 'required|min:3|max:250',
            'checkbox' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'A title is required!',
            'author.required' => 'A author is required!',
            'content.required' => 'A content is required!',
            'checkbox.required' => 'You must agree before submitting.'
        ];
    }
}
