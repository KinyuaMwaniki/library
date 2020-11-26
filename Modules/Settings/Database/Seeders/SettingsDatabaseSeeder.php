<?php

namespace Modules\Settings\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Modules\Inventory\Entities\StkItem;
use Modules\Inventory\Entities\StkGroup;

class SettingsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('settings')->delete();   

        Model::unguard();

        $now = Carbon::now();

        DB::table('settings')->insert(
            [
                [
                    'model_id' => StkItem::MODEL_ID,
                    'policy' => StkItem::NUMBERING_FORMAT,
                    'value' => '6',
                    'postfix' => '',
                    'second_value' => '3',
                    'exceptions' => '',
                    'description' => 'This policy sets the length of the inventory code id',
                    'enabled' => true,
                    'created_at' => $now,
                    'updated_at' => $now
                ],
                
                [
                    'model_id' => StkItem::MODEL_ID,
                    'policy' => StkItem::AUTOMATIC_NUMBERING,
                    'value' => 'false',
                    'postfix' => '',
                    'second_value' => '',
                    'exceptions' => '',
                    'description' => 'When true, the system generates inventory code',
                    'enabled' => true,
                    'created_at' => $now,
                    'updated_at' => $now
                ],

                [
                    'model_id' => StkGroup::MODEL_ID,
                    'policy' => StkGroup::NUMBERING_FORMAT_TEST,
                    'value' => '4',
                    'postfix' => '',
                    'second_value' => '',
                    'exceptions' => '',
                    'description' => 'When true, the system generates inventory code test',
                    'enabled' => true,
                    'created_at' => $now,
                    'updated_at' => $now
                ],

                [
                    'model_id' => StkGroup::MODEL_ID,
                    'policy' => StkGroup::AUTOMATIC_NUMBERING_TEST,
                    'value' => 'true',
                    'postfix' => '',
                    'second_value' => '',
                    'exceptions' => '',
                    'description' => 'When true, the system generates inventory code test',
                    'enabled' => true,
                    'created_at' => $now,
                    'updated_at' => $now
                ],
            ]
        );

        Model::reguard();
    }
}
