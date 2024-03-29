<?php

use Illuminate\Database\Seeder;
use Modules\Books\Entities\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class, 100)->create();
    }
}
