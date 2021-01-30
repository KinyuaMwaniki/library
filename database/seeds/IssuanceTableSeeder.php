<?php

use Illuminate\Database\Seeder;
use Modules\Books\Entities\Issuance;

class IssuanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Issuance::class, 20)->create();
    }
}
