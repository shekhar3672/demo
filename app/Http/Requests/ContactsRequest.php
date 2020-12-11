<?php

namespace App\Http\Requests;

use App\Contacts;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class ContactsRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'first_name' => [
                'required','string','max:255'
            ],
            'middle_name' => [
                'nullable','string','max:255'
            ],
            'last_name' => [
                'required','string','max:255'
            ],
            'primary_phone' => [
                'required','numeric'
            ],
            'secondary_phone' => [
                'nullable','numeric'
            ],
            'email' => [
                'required', 'email', Rule::unique((new Contacts)->getTable())->ignore($this->route()->contacts->id ?? null)
            ],
            'image' => [
                'nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'
            ]
        ];
    }
}
