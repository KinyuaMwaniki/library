<?php

namespace Modules\Settings\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Modules\Inventory\Entities\StkItem;
use Modules\Inventory\Entities\StkGroup;
use Modules\Inventory\Entities\StkCosting;

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
                    'id' => StkItem::MODEL_ID,
                    'name' => 'Stock Item',
                    'description' => 'This module deals with stock items creation',
                    'created_at' => $now,
                    'updated_at' => $now
                ],
                [
                    'id' => StkCosting::MODEL_ID,
                    'name' => 'Stock Costing',
                    'description' => 'This module deals with inventory costing methods',
                    'created_at' => $now,
                    'updated_at' => $now
                ],
                [
                    'id' => StkGroup::MODEL_ID,
                    'name' => 'Stock Group',
                    'description' => 'This module deals with inventory groups',
                    'created_at' => $now,
                    'updated_at' => $now
                ],
            ]
        );
    }
}
