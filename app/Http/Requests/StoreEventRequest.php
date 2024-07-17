<?php

namespace App\Http\Requests;

use App\Enums\EventItems;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEventRequest extends FormRequest
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
            'title' => 'bail|required|max:25',
            'city' => 'bail|required|max:25',
            'description' => 'bail|required',
            'date' => 'bail|required|date',
            'image' => 'bail|required|image',

            'items' => ['bail', 'required', 'array'],
            'items.*' => Rule::in(array_column(EventItems::cases(), 'name'))
        ];
    }
}
