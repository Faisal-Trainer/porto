<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'user_id' => \App\Models\User::first()?->id ?? \App\Models\User::factory(),
            'category_id' => \App\Models\Category::factory(),
            'title' => $title,
            'slug' => str($title)->slug(),
            'image' => 'https://picsum.photos/seed/' . rand(1, 1000) . '/800/600',
            'excerpt' => fake()->paragraph(),
            'content' => collect(fake()->paragraphs(rand(5, 10)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'is_published' => true,
            'published_at' => now()->subDays(rand(0, 365)),
            'is_journal' => false,
            'meta_title' => $title,
            'meta_description' => Str::limit(fake()->paragraph(), 160),
            'meta_keywords' => implode(',', fake()->words(5)),
        ];
    }

    /**
     * Indicate that the post is a scientific journal.
     */
    public function journal(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_journal' => true,
        ]);
    }
}
