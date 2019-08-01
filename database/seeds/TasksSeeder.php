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
            'user_id' => '1',
            'category' => 'test',
            'title' => 'Titlu de test User ID 1',
            'description' => 'Aceasta este o sarcina adaugata pentru teste la user cu ID 1',
            'status' => '0',
            'created_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'user_id' => '2',
            'category' => 'test',
            'title' => 'Titlu de test User ID 2',
            'description' => 'Aceasta este o sarcina adaugata pentru teste',
            'status' => '0',
            'created_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'user_id' => '2',
            'category' => 'test',
            'title' => 'Titlu de test User ID 2',
            'description' => 'Aceasta este o sarcina adaugata pentru teste',
            'status' => '0',
            'created_at' => Carbon::now()
        ]);
    }
}