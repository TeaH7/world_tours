<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTourRequest extends FormRequest
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
            'img1' => ['required'],
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


            'dates' => ['present', 'array'],
            'dates.*.start_date' => ['required'],
            'dates.*.end_date' => ['required'],

            'include' => ['present', 'array'],
            'include.*.title' => ['required', 'string'],
            'include.*.is_included' => ['nullable', 'boolean'],

            'itinerary' =>  ['present', 'array'],
            'itinerary.*.day_itinerary' => ['required', 'numeric'],
            'itinerary.*.title_itinerary' => ['required', 'string'],
            'itinerary.*.description_itinerary' => ['nullable'],



        ];
    }

    public function messages()
    {
        return [
            'tour_type.required' => 'Tipi i turit eshte i detyrueshem',
            'title.required' => 'Titulli eshte fushe e detyrueshme',
            'excerpt.required' => 'Nje pershkrim i shkurter eshte i detyrueshem',
            'location.required' => 'Vendodhja eshte fushe e detyrueshme',
            'img1.required' => 'Foto Cover eshte fushe e detyrueshme',
            'duration.required' => 'Kohezgjatja e turit eshte fushe e detyrueshme',
            'price.required' => 'Cmimi i turit eshte fushe e detyrueshme',
            'description.required' => 'Pershkrimi i turit eshte fushe e detyrueshme',
            'max_persons.required' => 'Numri Maksimal i personave per kete tur eshte i detyrueshem',
            'dates.*.start_date' => 'Data e Fillimit eshte fushe e detyrueshme',
            'dates.*.end_date' => 'Data e Mbarimit eshte fushe e detyrueshme',
            'include.*.title.required' => 'Titulli eshte fushe e detyrueshme',
            'itinerary.*.day_itinerary.required' => 'Dita e Itinerarit eshte fushe e detyrueshme',

            'itinerary.*.title_itinerary.required' => 'Titulli i Itinerarit eshte fushe e detyrueshme',

        ];
    }
}
