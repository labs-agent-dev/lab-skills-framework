<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * UpdateCategoryRequest - Validation pour la mise à jour (ignore l'ID courant)
 */
class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $categoryId = $this->route('category')?->id ?? $this->input('id');

        return [
            'name'        => ['required', 'string', 'min:3', 'max:100', Rule::unique('categories', 'name')->ignore($categoryId)],
            'slug'        => ['required', 'string', 'max:120', Rule::unique('categories', 'slug')->ignore($categoryId), 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/'],
            'description' => ['nullable', 'string', 'max:500'],
            'status'      => ['required', Rule::in(['active', 'inactive'])],
        ];
    }
}

