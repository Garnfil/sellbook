<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->can('edit customer');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|min:5|max:25',
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'profile_image' => 'nullable|image',
            'contact_number' => 'nullable|max:11',
            'gender' => 'nullable|in:Male,Female',
            'birthdate' => 'nullable|date',
            'age' => 'nullable|integer',
            'address' => 'nullable',
            'zip_code' => 'nullable'
        ];
    }
}
