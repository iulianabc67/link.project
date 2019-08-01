<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'active' => 'true',
            'href' => 'http://iulian.dx.am/spanzuratoarea/',
            'img' => '/hang/game-286x163.jpg',
            'alt' => 'hangman game picture',
            'title' => 'HangMan Game',
            'text' => 'Game is writen in PHP and it picks random words (in romaniam) from an array',
            'created_at' => Carbon::now()
        ]);

        DB::table('cards')->insert([
            'active' => 'true',
            'href' => 'http://iulian.dx.am/db/',
            'img' => '/db/stock-app-286x190.jpg',
            'alt' => 'warehouse picture',
            'title' => 'Stock product app',
            'text' => 'The app is using PHP and MySQL, inputs are filtered to avoid HTML injection',
            'created_at' => Carbon::now()
        ]);

        DB::table('cards')->insert([
            'active' => 'true',
            'href' => 'http://localhost/link.project/public/tasks',
            'img' => '/todo/board-286x191.jpg',
            'alt' => 'to do list picture',
            'title' => 'To do list',
            'text' => 'App is writen in JavaScript and uses LocalStorage to save your list of tasks',
            'created_at' => Carbon::now()
        ]);

        DB::table('cards')->insert([
            'active' => 'true',
            'href' => 'http://iulian.dx.am/imc/',
            'img' => '/psd/template-286x214.png',
            'alt' => 'website picture',
            'title' => 'PSD to HTML',
            'text' => 'PSD to HTML web site using HTML, CSS, Bootstrap, JavaScript, jQuery UI',
            'created_at' => Carbon::now()
        ]);

        DB::table('cards')->insert([
            'active' => 'true',
            'href' => 'http://squid.iulian.dx.am/',
            'img' => '/group11.svg',
            'alt' => 'website picture in SVG format',
            'title' => 'PSD to HTML',
            'text' => 'PSD to HTML web site using HTML, CSS, Bootstrap, JavaScript, jQuery UI',
            'created_at' => Carbon::now()
        ]);

    }
}

