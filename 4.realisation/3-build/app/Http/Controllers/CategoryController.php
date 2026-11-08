<?php

namespace App\Http\Controllers;

use App\Services\Contracts\CategoryServiceInterface;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\DTO\CategoryData;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

/**
 * CategoryController - Thin Controller (Passerelle HTTP)
 * Responsabilité unique : réceptionner la requête HTTP, déléguer au Service Layer, retourner la réponse.
 */
class CategoryController extends Controller
{
    public function __construct(
        protected CategoryServiceInterface $categoryService
    ) {}

    /**
     * Affiche la liste des catégories.
     */
    public function index(Request $request): View|JsonResponse
    {
        $categories = $this->categoryService->getPaginatedCategories(
            search: $request->query('search'),
            status: $request->query('status'),
            perPage: 10
        );

        if ($request->wantsJson()) {
            return response()->json($categories);
        }

        return view('categories.index', compact('categories'));
    }

    /**
     * Enregistre une nouvelle catégorie via le Service Layer.
     */
    public function store(StoreCategoryRequest $request): RedirectResponse|JsonResponse
    {
        $dto = CategoryData::fromRequest($request);
        $category = $this->categoryService->createCategory($dto);

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Catégorie créée avec succès via le Service Layer.',
                'category' => $category,
            ], 201);
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Catégorie créée avec succès.');
    }

    /**
     * Met à jour une catégorie via le Service Layer.
     */
    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse|JsonResponse
    {
        $dto = CategoryData::fromRequest($request);
        $updated = $this->categoryService->updateCategory($category, $dto);

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Catégorie mise à jour avec succès via le Service Layer.',
                'category' => $updated,
            ]);
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Supprime une catégorie via le Service Layer.
     */
    public function destroy(Category $category): RedirectResponse|JsonResponse
    {
        $this->categoryService->deleteCategory($category);

        if (request()->wantsJson()) {
            return response()->json([
                'message' => 'Catégorie supprimée avec succès via le Service Layer.'
            ]);
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Catégorie supprimée avec succès.');
    }
}

