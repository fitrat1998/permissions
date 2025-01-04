<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'fullname' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // 2MB limit
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'nullable|string|unique:users,phone|regex:/^[0-9]{9,15}$/',
            'email_verified_at' => 'nullable|date',
            'password' => 'required|string|min:8|confirmed',
            'pin' => 'nullable|integer|digits:4',
            'id_series' => 'nullable|string|max:10',
            'country' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'verified' => 'nullable|in:yes,no',
        ];
    }
}
