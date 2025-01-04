<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'phone' => 'nullable|string|unique:users,phone',
            'email_verified_at' => 'nullable|date',
            'password' => 'required|string|min:8',
            'pin' => 'nullable|integer|digits:14',
            'id_series' => 'nullable|string|max:10',
            'country' => 'nullable|string|max:200',
//            'city' => 'nullable|string|max:200',
//            'district' => 'nullable|string|max:200',
            'verified' => 'nullable|in:yes,no',
        ];
    }
}
