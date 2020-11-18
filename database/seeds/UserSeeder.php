<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'admin@wizag.biz')->first();
        if (!$user) {             
                $user = User::create([
                    'name' => 'Administrator',
                    'email' => 'admin@wizag.biz',
                    'password' => Hash::make('password'),
                    ]);
        }
        else
        {
            $this->command->info('admin@wizag.biz already exists');
        }

        $role = Role::firstOrCreate(
            ['name' =>  'WizagAdmin'],
            ['name' => 'WizagAdmin']
        );



        if(!$user->hasRole($role))
        {
            $user->assignRole('WizagAdmin');
        }

    }
}
