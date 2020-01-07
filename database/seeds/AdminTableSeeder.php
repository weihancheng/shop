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
        $admins = $admins[0];
        $admins->name = "admin";
        $admins->nickname = "weiy";
        $admins->save();
        // 权限添加
		Spatie\Permission\Models\Role::create([
			'title' => '管理员',
			'name' => 'admin',
			'guard_name' => 'admin'
		]);
		$admins->assignRole('admin');
    }
}
