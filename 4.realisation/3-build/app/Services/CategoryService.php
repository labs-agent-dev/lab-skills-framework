<?php

namespace App\Services;

use App\Services\Contracts\CategoryServiceInterface;
use App\Models\Category;
use App\DTO\CategoryData;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

/**
 * CategoryService - Implémentation du Service Layer Métier
 * Conforme au standard P0 Architecture d'Addy Osmani :
 * - Toute la logique métier est encapsulée ici
 * - Gestion explicite des transactions SQL (DB::transaction)
 * - Élimination systématique du problème N+1
 */
class CategoryService implements CategoryServiceInterface
{
    /**
     * Récupère la liste paginée des catégories avec comptage des articles associés.
     */
    public function getPaginatedCategories(?string $search = null, ?string $status = null, int $perPage = 10): LengthAwarePaginator
    {
        return Category::query()
            ->withCount('posts')
            ->when($search, fn($q) => $q->search($search))
            ->when($status, fn($q) => $q->where('status', $status))
            ->latest('id')
            ->paginate($perPage);
    }

    /**
     * Crée une nouvelle catégorie dans une transaction SQL atomique.
     */
    public function createCategory(CategoryData $data): Category
    {
        return DB::transaction(function () use ($data) {
            $payload = $data->toArray();
            
            // Sécurité : normalisation du slug si nécessaire
            $payload['slug'] = Str::slug($payload['slug'] ?: $payload['name']);

            $category = Category::create($payload);

            Log::info("Catégorie créée avec succès [ID: {$category->id}] par CategoryService.");

            return $category;
        });
    }

    /**
     * Met à jour une catégorie existante.
     */
    public function updateCategory(Category $category, CategoryData $data): Category
    {
        return DB::transaction(function () use ($category, $data) {
            $payload = $data->toArray();
            $payload['slug'] = Str::slug($payload['slug'] ?: $payload['name']);

            $category->update($payload);

            Log::info("Catégorie mise à jour [ID: {$category->id}] par CategoryService.");

            return $category;
        });
    }

    /**
     * Supprime une catégorie.
     */
    public function deleteCategory(Category $category): bool
    {
        return DB::transaction(function () use ($category) {
            // Optionnel : vérifier si des articles sont rattachés avant suppression
            $deleted = (bool) $category->delete();

            Log::warning("Catégorie supprimée [ID: {$category->id}] par CategoryService.");

            return $deleted;
        });
    }
}

