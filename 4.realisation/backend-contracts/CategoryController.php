<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

/**
 * CategoryController - Conforme au standard P0 Architecture (HoangNguyen0403/agent-skills-standard)
 * Règles strictes :
 * - Thin controller : aucune logique métier complexe dans les méthodes d'action
 * - Form Requests dédiées pour toute validation
 * - Eager loading et withCount systématique pour éliminer le problème N+1
 */
class CategoryController extends Controller
{
    /**
     * Affiche la liste des catégories avec le comptage des articles associés.
     */
    public function index(Request $request): View|JsonResponse
    {
        $categories = Category::query()
            ->withCount('posts')
            ->when($request->search, fn($q, $search) => $q->search($search))
            ->when($request->status, fn($q, $status) => $q->where('status', $status))
            ->latest('id')
            ->paginate(10);

        if ($request->wantsJson()) {
            return response()->json($categories);
        }

        return view('categories.index', compact('categories'));
    }

    /**
     * Enregistre une nouvelle catégorie via la Form Request validée.
     */
    public function store(StoreCategoryRequest $request): RedirectResponse|JsonResponse
    {
        $category = Category::create($request->validated());

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Catégorie créée avec succès.',
                'category' => $category
            ], 201);
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Catégorie créée avec succès.');
    }

    /**
     * Met à jour une catégorie existante.
     */
    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse|JsonResponse
    {
        $category->update($request->validated());

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Catégorie mise à jour avec succès.',
                'category' => $category
            ]);
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Supprime une catégorie.
     */
    public function destroy(Category $category): RedirectResponse|JsonResponse
    {
        $category->delete();

        if (request()->wantsJson()) {
            return response()->json([
                'message' => 'Catégorie supprimée avec succès.'
            ]);
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Catégorie supprimée avec succès.');
    }
}

