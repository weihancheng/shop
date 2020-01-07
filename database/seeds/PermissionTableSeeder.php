<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rules = config('rule');
        foreach($rules as $rule) {
            foreach ($rule['permissions'] as $permission) {
                unset($permission['title']);
                unset($permission['guard']);
                $permission['guard_name'] = 'admin';
                \Spatie\Permission\Models\Permission::create($permission);
            }
        }
    }
}
