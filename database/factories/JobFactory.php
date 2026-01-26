<?php
namespace Database\Factories;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => fake()->numberBetween(40000, 120000),
            'employer_id' => Employer::factory(),
            'description' => fake()->sentence(),
        ];
    }
}
