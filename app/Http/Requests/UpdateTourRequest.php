<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTourRequest extends FormRequest
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
            'tour_type' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'excerpt' => ['required'],
            'location' => ['required'],
            'img1' => ['nullable'],
            'img2' => ['nullable'],
            'img3' => ['nullable'],
            'img4' => ['nullable'],
            'duration' => ['required', 'numeric'],
            'price' => ['required'],
            'months' => ['nullable'],
            'description' => ['required'],
            'details1' => ['nullable'],
            'details2' => ['nullable'],
            'details3' => ['nullable'],
            'details4' => ['nullable'],
            'details5' => ['nullable'],
            'max_persons' => ['required', 'numeric'],
        ];
    }
}
