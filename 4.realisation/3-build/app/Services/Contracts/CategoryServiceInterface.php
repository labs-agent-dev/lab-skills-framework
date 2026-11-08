<?php

namespace App\Services\Contracts;

use App\Models\Category;
use App\DTO\CategoryData;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Contrat d'Interface du Service Métier CategoryService
 */
interface CategoryServiceInterface
{
    /**
     * Récupère la liste paginée des catégories avec eager-loading withCount('posts').
     */
    public function getPaginatedCategories(?string $search = null, ?string $status = null, int $perPage = 10): LengthAwarePaginator;

    /**
     * Crée une nouvelle catégorie dans une transaction sécurisée.
     */
    public function createCategory(CategoryData $data): Category;

    /**
     * Met à jour une catégorie existante.
     */
    public function updateCategory(Category $category, CategoryData $data): Category;

    /**
     * Supprime une catégorie après vérification des contraintes d'intégrité.
     */
    public function deleteCategory(Category $category): bool;
}

