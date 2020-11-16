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
        // DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@wizag.biz',
            'password' => Hash::make('password'),
        ]);
    }
}
