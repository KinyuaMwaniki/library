<?php

use Illuminate\Database\Seeder;
use Modules\Students\Entities\Student;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Student::class, 100)->create();
    }
}
