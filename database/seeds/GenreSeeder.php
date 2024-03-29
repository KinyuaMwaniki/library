<?php

use Illuminate\Database\Seeder;
use Modules\Books\Entities\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Genre::class, 20)->create();
    }
}
