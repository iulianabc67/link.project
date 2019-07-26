<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'category' => 'test',
            'title' => 'Titlu de test',
            'description' => 'Aceasta este o sarcina adaugata pentru teste',
            'status' => '0',
            'created_at' => Carbon::now()
        ]);
    }
}