<?php

use App\ModelHasRole;
use Illuminate\Database\Seeder;

class ModelHasRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelHasRole::insert([
            ['role_id'=>1,
                'model_type'=>'App\User',
                'model_id'=>1],
            ['role_id'=>1,
                'model_type'=>'App\User',
                'model_id'=>2],
        ]);
    }
}
