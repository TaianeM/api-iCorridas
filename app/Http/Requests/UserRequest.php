<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'celular' => 'nullable',
            'cpf' => 'nullable',
            'driver' => 'nullable',
            'email' => 'nullable',
            'geo_state_id' => 'nullable',
            'id' => 'nullable',
            'name' => 'nullable',
            'premium' => 'nullable',
            'score' => 'nullable',
            'stripe_id' => 'nullable',
            'cnh_url' => 'nullable',
            'cnh_approved' => 'nullable',
            'gender_id' => 'nullable',
        ];
    }
}
