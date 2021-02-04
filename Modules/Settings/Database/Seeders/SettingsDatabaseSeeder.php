<?php

namespace Modules\Settings\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Books\Entities\Issuance;
use Illuminate\Database\Eloquent\Model;

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
                    'model_id' => Issuance::MODEL_ID,
                    'policy' => Issuance::DEFAULT_ISSUE_DAYS,
                    'value' => '6',
                    'description' => 'This policy sets the days a book is issued by default',
                    'enabled' => true,
                    'created_at' => $now,
                    'updated_at' => $now
                ],
                
                [
                    'model_id' => Issuance::MODEL_ID,
                    'policy' => Issuance::MAXIMUM_ISSUES_PER_STUDENT,
                    'value' => '3',
                    'description' => 'This policy determines how many books a student can have at a time',
                    'enabled' => true,
                    'created_at' => $now,
                    'updated_at' => $now
                ],

                // [
                //     'model_id' => Issuance::MODEL_ID,
                //     'policy' => Issuance::PRINT_ISSUE_CARD,
                //     'value' => 'true',
                //     'description' => 'When true, the system creates a printout with issue details',
                //     'enabled' => true,
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
            ]
        );

        Model::reguard();
    }
}
