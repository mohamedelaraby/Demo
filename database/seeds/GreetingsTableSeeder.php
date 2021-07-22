<?php

use App\Models\Greeting;
use Illuminate\Database\Seeder;

class GreetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Greeting::class, 50)->create();

    }
}
