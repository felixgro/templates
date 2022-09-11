<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Template>
 */
class TemplateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->unique()->firstName();

        return [
            'title' => $title,
            'slug' => strtolower($title),
            'html' => '<h1>Hello World!</h1>',
            'css' => 'h1 { background: green; }',
            'js' => null
        ];
    }
}
