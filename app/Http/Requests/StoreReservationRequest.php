<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'nr_of_people' => ['required', 'numeric'],
            'tour_id' => ['required', 'exists:tours,id'],
            'tour_date_id' => ['required', 'exists:tour_dates,id']

        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Emri eshte fushe e detyrueshme',
            'last_name.required' => 'Mbiemri eshte fushe e detyrueshme',
            'email.required' => 'Email eshte fushe e detyrueshme',
            'phone.required' => 'Numri i telefonit eshte i detyrueshem',
            'nr_of_people.required' => 'Numri i personave per kete udhetim eshte i detyrueshem',
            'tour_date_id.required' => 'Ju lutem zgjidhni nje date'
        ];
    }
}
