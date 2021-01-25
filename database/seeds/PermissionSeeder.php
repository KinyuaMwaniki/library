<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     

        DB::table('permissions')->delete();   

        Artisan::call('cache:forget spatie.permission.cache');        

        $permissions = Config::get('permission_constants.permissions');
        foreach($permissions as $menu => $sub_menus)
        {
            foreach($sub_menus as $sub_menu => $permissions)
            {
                foreach($permissions as $permission)
                {
                    $perm_check = Permission::where('name', $permission)->first();

                    if (!$perm_check) {
                        $permission = Permission::create([
                            'name' => $permission,
                            'guard_name' => 'web',
                            'menu' => $menu,
                            'submenu' => $sub_menu,
                        ]);
                    }
                }
            }
        }
        
        $role = Role::firstOrCreate(
            ['name' =>  'Administrator'],
            ['name' => 'Administrator']
        );

        $role->givePermissionTo(Permission::where('guard_name', 'web')->get());
    }
}
