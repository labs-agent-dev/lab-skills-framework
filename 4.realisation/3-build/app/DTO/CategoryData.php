<?php

namespace App\DTO;

use Illuminate\Http\Request;

/**
 * Data Transfer Object (DTO) - CategoryData
 * Garantit l'immutabilité et le typage strict (PHP 8.2+) entre le contrôleur et le Service Layer.
 */
readonly class CategoryData
{
    public function __construct(
        public string $name,
        public string $slug,
        public ?string $description = null,
        public string $status = 'active',
    ) {}

    /**
     * Instanciation depuis une requête validée (FormRequest ou Request).
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            name: (string) $request->validated('name'),
            slug: (string) $request->validated('slug'),
            description: $request->validated('description') ? (string) $request->validated('description') : null,
            status: (string) ($request->validated('status') ?? 'active'),
        );
    }

    /**
     * Conversion en tableau associatif pour la persistance Eloquent.
     */
    public function toArray(): array
    {
        return [
            'name'        => $this->name,
            'slug'        => $this->slug,
            'description' => $this->description,
            'status'      => $this->status,
        ];
    }
}

