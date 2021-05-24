<?php

namespace Database\Factories\App\SamplePage\KanbanView;

use App\Models\App\SamplePage\KanbanView\Stage;
use Illuminate\Database\Eloquent\Factories\Factory;

class StageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stage::class;
    protected $index = -1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->index++;
        $stages = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven'];
        return [
            'name' => 'Stage ' . $stages[$this->index]
        ];
    }
}
