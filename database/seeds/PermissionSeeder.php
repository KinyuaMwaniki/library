<?php

use Illuminate\Database\Seeder;
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
        // TODO: ADD DB transaction in case permissions have error

        DB::table('permissions')->delete();   

        $permissions = Config::get('permission_constants.permissions');
        foreach($permissions as $menu => $sub_menus)
        {
            foreach($sub_menus as $sub_menu => $permissions)
            {
                foreach($permissions as $permission)
                {
                    // info($menu . " - " . $sub_menu . " - " . $permission);
                    $perm_check = Permission::where('name', $permission)->first();
                    if (!$perm_check) {
                        DB::table('permissions')->insert([
                            'name' => $permission,
                            'guard_name' => 'web',
                            'menu' => $menu,
                            'submenu' => $sub_menu,
                        ]);
                    }
                }
            }
        }
    }
}
