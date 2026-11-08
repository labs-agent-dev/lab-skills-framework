<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\CategoryService;
use App\DTO\CategoryData;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

/**
 * Phase 4 : VERIFY — Tests Unitaires & Fonctionnels du Service Layer
 * Conforme au Playbook d'Addy Osmani : validation rigoureuse avant toute revue de code.
 */
class CategoryServiceTest extends TestCase
{
    use RefreshDatabase;

    protected CategoryService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new CategoryService();
    }

    /** @test */
    public function it_creates_a_category_within_a_database_transaction()
    {
        $dto = new CategoryData(
            name: 'Intelligence Artificielle',
            slug: 'intelligence-artificielle',
            description: 'Tutoriels et compétences d’agents IA.',
            status: 'active'
        );

        $category = $this->service->createCategory($dto);

        $this->assertInstanceOf(Category::class, $category);
        $this->assertDatabaseHas('categories', [
            'id'   => $category->id,
            'name' => 'Intelligence Artificielle',
            'slug' => 'intelligence-artificielle',
            'status' => 'active',
        ]);
    }

    /** @test */
    public function it_automatically_normalizes_slug_if_not_properly_formatted()
    {
        $dto = new CategoryData(
            name: 'Développement Web & Cloud !',
            slug: '', // Laisser vide pour forcer la normalisation par le Service
            description: null,
            status: 'active'
        );

        $category = $this->service->createCategory($dto);

        $this->assertEquals('developpement-web-cloud', $category->slug);
    }

    /** @test */
    public function it_retrieves_paginated_categories_with_post_count_without_n_plus_one_issue()
    {
        $cat = Category::create([
            'name' => 'Architecture',
            'slug' => 'architecture',
            'status' => 'active'
        ]);

        Post::factory()->count(5)->create(['category_id' => $cat->id]);

        DB::enableQueryLog();

        $results = $this->service->getPaginatedCategories(search: 'Architecture', status: 'active', perPage: 10);

        // Une seule requête SQL doit être exécutée avec le withCount
        $this->assertCount(1, $results);
        $this->assertEquals(5, $results->first()->posts_count);
        $this->assertLessThanOrEqual(2, count(DB::getQueryLog()));
    }

    /** @test */
    public function it_updates_existing_category_attributes()
    {
        $category = Category::create([
            'name' => 'Old Name',
            'slug' => 'old-name',
            'status' => 'inactive'
        ]);

        $updateDto = new CategoryData(
            name: 'New Name',
            slug: 'new-name',
            description: 'Updated description',
            status: 'active'
        );

        $updated = $this->service->updateCategory($category, $updateDto);

        $this->assertEquals('New Name', $updated->name);
        $this->assertEquals('active', $updated->status);
        $this->assertDatabaseHas('categories', ['name' => 'New Name']);
    }

    /** @test */
    public function it_deletes_a_category_properly()
    {
        $category = Category::create([
            'name' => 'To Delete',
            'slug' => 'to-delete',
            'status' => 'inactive'
        ]);

        $result = $this->service->deleteCategory($category);

        $this->assertTrue($result);
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}

