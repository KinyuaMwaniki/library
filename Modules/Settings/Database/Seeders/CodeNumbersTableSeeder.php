<?php

namespace Modules\Settings\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Modules\Inventory\Entities\StkItem;

class CodeNumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('code_numbers')->delete();   

        $now = Carbon::now();

        DB::table('code_numbers')->insert(
            [
                [
                    'model_id' => StkItem::MODEL_ID,
                    'code_length' => 6,
                    'alpha_length' => 3,
                    'created_at' => $now,
                    'updated_at' => $now
                ],
            ]
        );

        Model::reguard();
    }
}

