<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TryFreeFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['string', 'required'],
            'phone' => ['string', 'required'],
            'email' => ['string', 'required'],
            'city' => ['string', 'required'],
            'country' => ['string', 'required'],
            'business_name' => ['string', 'required'],
            'number_of_branches' => ['string', 'required'],
            'contact_me_through' => ['string', 'required'],
        ];
    }
}
