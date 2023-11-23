<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechnicianRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'f_name' => 'required|string',
            'l_name' => 'required|string',
            'email' => 'required|email|unique:technicians,email',
            'password' => 'required|string|min:6',
            'mobile' => 'required|string|unique:technicians,mobile',
            'city' => 'required|string',
//            'personal_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'personal_image' => 'required|string',
            'bank' => 'required|string',
            'iban' => 'required|string|unique:technicians,iban',
            'location' => 'required|string',
//            'residency_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'residency_image' => 'required|string',
            'skills' => 'required|array',
            'skills.*.service_id' => 'required|int|exists:services,id',
            'skills.*.service_name' => 'required|string',
        ];
    }
}
