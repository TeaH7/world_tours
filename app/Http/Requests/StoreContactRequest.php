<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name' => ['required', 'regex:/^[a-zA-Z]+$/u', 'max:255'],
            'email' => ['required', 'email'],
            'message' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Emri eshte fushe e detyrueshme',
            'name.regex' => 'Emri duhet te permbaje vetem shkronja',
            'name.max' => 'Emri nuk duhet te jete me shume se 255 karaktere',
            'email.required' => 'Email eshte fushe e detyrueshme',
            'email.email' => 'Email duhet te permbaje @',
            'message.required' => 'Mesazhi eshte fushe e detyrueshme',
        ];
    }
}
