<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => [
                'required','string', 'max:255'
            ],
            'middle_name' => [
                'string', 'max:255'
            ],
            'last_name' => [
                'required','string', 'max:255'
            ],
            'primary_phone' => [
                'required','numeric','min:5','max:10'
            ],
            'secondary_phone' => [
                'numeric','min:5','max:10'
            ],

             'email' => [
                'required','string', 'email', 'max:255', 'unique:jobs'
            ]
        ];
    }
}
