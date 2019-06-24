<?php

use App\PermissionGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role',
            'permission',
            'user',
            'contact',
            'gallery',
            'blog',
            'visitor',
            'category'
        ];


        foreach ($permissions as $permission) {
            $group=PermissionGroup::create([
                'name' => $permission,
            ]);
            $created_at = Carbon::now();
            Permission::insert([
                ['name' => $permission.'-list',
                    'group_id'=>$group->id,
                    'guard_name'=>'web',
                    'created_at'=>$created_at,
                    'updated_at'=>$created_at
                ],
                ['name' => $permission.'-create',
                    'group_id'=>$group->id,
                    'guard_name'=>'web',
                    'created_at'=>$created_at,
                    'updated_at'=>$created_at
                ],
                ['name' => $permission.'-edit',
                    'group_id'=>$group->id,
                    'guard_name'=>'web',
                    'created_at'=>$created_at,
                    'updated_at'=>$created_at
                ],
                ['name' => $permission.'-delete',
                    'group_id'=>$group->id,
                    'guard_name'=>'web',
                    'created_at'=>$created_at,
                    'updated_at'=>$created_at
                ],
            ]);

        }
    }
}
