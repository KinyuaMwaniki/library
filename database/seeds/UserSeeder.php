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
        $user = User::where('email', 'admin@library.biz')->first();
        if (!$user) {             
                $user = User::create([
                    'name' => 'Administrator',
                    'email' => 'admin@library.biz',
                    'password' => Hash::make('secret'),
                    ]);
        }
        else
        {
            $this->command->info('admin@library.biz already exists');
        }

        $role = Role::firstOrCreate(
            ['name' =>  'Administrator'],
            ['name' => 'Administrator']
        );



        if(!$user->hasRole($role))
        {
            $user->assignRole('Administrator');
        }

    }
}
