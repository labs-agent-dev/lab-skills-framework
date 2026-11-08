# Phase 1 : DEFINE — Spécification Fonctionnelle & Technique du CRUD Catégories

> **Étape 1 du Playbook SDLC :** Cadrer explicitement les besoins, les règles d'intégrité et les critères d'acceptation avant d'écrire la moindre ligne de code métier.

---

## 1. Contexte & User Stories

- **US-01 (Consultation & Recherche) :** En tant qu'administrateur ou rédacteur, je veux consulter la liste paginée des catégories avec recherche en temps réel par nom/slug et filtrage par statut (actif/inactif), pour retrouver rapidement une catégorie.
- **US-02 (Comptage des Relations) :** En tant qu'administrateur, je veux visualiser immédiatement le nombre d'articles associés à chaque catégorie (`withCount('posts')`) sans déclencher de requêtes supplémentaires ($N+1$).
- **US-03 (Création Réactive) :** En tant qu'administrateur, je veux créer une catégorie via un modal sans rechargement de page, avec génération automatique et sécurisée du slug URL à partir du nom.
- **US-04 (Mise à jour & Suppression Sécurisée) :** En tant qu'administrateur, je veux pouvoir modifier les métadonnées d'une catégorie et la supprimer avec une confirmation explicite.

---

## 2. Critères d'Acceptation (Acceptance Criteria)

| Règle | Spécification Technique | Sanction / Comportement |
| :--- | :--- | :--- |
| **Nom obligatoire** | `string, min:3, max:100, unique` | Rejet avec message d'erreur explicite en français. |
| **Slug normalisé** | `string, regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/` | Auto-généré côté client (Alpine.js) et validé côté serveur. |
| **Statut typé** | Énumération : `'active'` \| `'inactive'` | Défaut : `'active'`. Rejet de toute autre valeur. |
| **Sécurité & Intégrité** | Opérations d'écriture encapsulées dans des transactions | `DB::transaction()` obligatoire dans le Service Layer. |
| **Zéro $N+1$** | Eager loading ou `withCount('posts')` | Interdiction formelle d'appeler `$category->posts->count()` dans la vue. |

---

## 3. Contrat d'Interface du Service Métier

```php
interface CategoryServiceInterface
{
    public function getPaginatedCategories(?string $search, ?string $status, int $perPage = 10): LengthAwarePaginator;
    public function createCategory(CategoryData $data): Category;
    public function updateCategory(Category $category, CategoryData $data): Category;
    public function deleteCategory(Category $category): bool;
}
```

---

## 4. Checkpoint Humain (Garde-Fou Playbook)
- [x] Le contrat technique est-il validé par le responsable d'architecture ?
- [x] Les critères d'acceptation couvrent-ils à la fois les règles backend et l'expérience frontend réactive ?

