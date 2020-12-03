<?php

use Illuminate\Database\Seeder;
use Modules\Settings\Database\Seeders\ModelsTableSeeder;
use Modules\Settings\Database\Seeders\CodeNumbersTableSeeder;
use Modules\Settings\Database\Seeders\SettingsDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(ModelsTableSeeder::class);
        $this->call(SettingsDatabaseSeeder::class);
    }
}
