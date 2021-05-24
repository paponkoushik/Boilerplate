<?php
namespace Database\Seeders\App;

use App\Models\App\Crud\Crud;
use Illuminate\Database\Seeder;

class CrudTableSeeder extends Seeder
{
    public function run()
    {
        factory(Crud::class, 50)->create();
    }
}