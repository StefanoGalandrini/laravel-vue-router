<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('drinks') as $drink) {
            Drink::create($drink);
        }
    }
}
