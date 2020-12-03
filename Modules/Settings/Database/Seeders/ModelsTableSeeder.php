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
            
            ]
        );
    }
}
