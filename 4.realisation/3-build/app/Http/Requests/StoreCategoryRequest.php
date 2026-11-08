<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * StoreCategoryRequest - Validation étanche pour la création
 */
class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'        => ['required', 'string', 'min:3', 'max:100', 'unique:categories,name'],
            'slug'        => ['required', 'string', 'max:120', 'unique:categories,slug', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/'],
            'description' => ['nullable', 'string', 'max:500'],
            'status'      => ['required', Rule::in(['active', 'inactive'])],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom de la catégorie est obligatoire.',
            'name.min'      => 'Le nom de la catégorie doit comporter au moins 3 caractères.',
            'name.unique'   => 'Cette catégorie existe déjà dans la base.',
            'slug.regex'    => 'Le slug doit contenir uniquement des lettres minuscules, chiffres et tirets sans espaces.',
        ];
    }
}

