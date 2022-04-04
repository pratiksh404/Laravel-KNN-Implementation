<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FutsalRequest extends FormRequest
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
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|numeric|max:10',
            'map' => 'required|max:255',
            'latitude' => 'required',
            'longitude' => 'required',
        ];
    }
}
