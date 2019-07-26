<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'iulian',
            'username' => 'iulian',
            'email' => 'iulian.abc@gmail.com',
            'email_verified_at' => '2019-07-14 18:49:45',
            'password' => '$2y$10$urME2YjnVFxb83FhNppp5euAIe873BlbEq3i3/.RDDOjMy8ubDgxS',
        ]);
        DB::table('users')->insert([
            'name' => 'sample',
            'username' => 'sample',
            'email' => 'sample',
            'email_verified_at' => '2019-07-14 18:49:45',
            'password' => '$2y$10$0F3zZMl5b4u4iv1q/m4/7.PakgooyE4BCwU5G.Fwn7UGg0j7lIZ3W',
        ]);
    }
}
