<?php

namespace Database\Factories\App\SamplePage;

use App\Models\App\SamplePage\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'count' => $this->faker->randomNumber(2),
            'value' => $this->faker->randomNumber(3)
        ];
    }
}
