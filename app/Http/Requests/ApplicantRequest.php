<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|string',
            'prénom' => 'required|string',
            'age' => 'required|string',
            'email' => 'required|email|unique:applicants,email',
            'code' => 'required|string',
            'téléphone' => 'required|string|regex:/^\+\d+$/i|unique:applicants,phone|max:15',
            'année' => 'required|numeric',
            'type' => 'required|string',
            'question' => 'required|string',
            'école' => 'exclude_unless:question,Oui|required|string',
        ];
    }
}
