<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

/**
 * Modèle Category - Conforme au standard P0 Eloquent
 * Prévention stricte des failles mass assignment et optimisation des requêtes.
 */
class Category extends Model
{
    /**
     * Attributs assignables en masse (Sécurité P0).
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];

    /**
     * Casts typés.
     */
    protected $casts = [
        'status' => 'string',
    ];

    /**
     * Relation avec les articles (posts).
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Scope local pour le filtrage par statut actif.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope local pour la recherche plein texte sur nom et slug.
     */
    public function scopeSearch(Builder $query, ?string $term): Builder
    {
        if (blank($term)) {
            return $query;
        }

        return $query->where(function (Builder $q) use ($term) {
            $q->where('name', 'like', "%{$term}%")
              ->orWhere('slug', 'like', "%{$term}%");
        });
    }
}

