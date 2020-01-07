<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = factory(App\Model\Admin::class, 5)->create();
        $admin = $admins[0];
        $admin->name = "weiy";
        $admin->nickname = "weiy";
        $admin->save();


        // 权限添加
		Spatie\Permission\Models\Role::create([
			'title' => '站长',
			'name' => 'webmaster',
			'guard_name' => 'admin'
		]);
		$admin->assignRole('webmaster');


        $admin2 = $admins[1];
        $admin2->name = "admin";
        $admin2->nickname = "admin";
        $admin2->save();
        $admin2->assignRole('superadmin');
    }
}
