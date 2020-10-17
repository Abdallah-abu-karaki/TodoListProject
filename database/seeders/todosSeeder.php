<?php

namespace Database\Seeders;

use App\Models\Todos;
use Illuminate\Database\Seeder;

class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todos::factory(5)->create();
    }
}
