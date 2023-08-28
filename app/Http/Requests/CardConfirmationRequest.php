<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardConfirmationRequest extends FormRequest
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
            'account_holder' => 'required',
            'taxpayer_registry' => 'required',
            'card_number' => 'required',
            'month_validity' => 'required',
            'expiry_year' => 'required',
            'cvv' => 'required',
            'flag' => 'required'
        ];
    }
}
