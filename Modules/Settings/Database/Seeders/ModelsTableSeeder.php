<?php

namespace Modules\Settings\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Modules\Books\Entities\Book;
use Illuminate\Support\Facades\DB;
use Modules\Books\Entities\Issuance;
use Illuminate\Database\Eloquent\Model;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('models')->delete();   
        
        Model::unguard();

        $now = Carbon::now();
        
        DB::table('models')->insert(
            [
                [
                    'id' => Book::MODEL_ID,
                    'name' => 'Book',
                    'description' => 'This module deals with books creation, editing, and deletion',
                    'created_at' => $now,
                    'updated_at' => $now
                ],
                [
                    'id' => Issuance::MODEL_ID,
                    'name' => 'Issuance',
                    'description' => 'This module deals with issuing books to students',
                    'created_at' => $now,
                    'updated_at' => $now
                ],
            ]
        );
    }
}
