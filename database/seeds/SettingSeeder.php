<?php

use Illuminate\Database\Seeder;
use Modules\Setting\Entities\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            ['name'=>'site_title',
                'value'=>'Susan Blog'
            ],
            ['name'=>'data_color',
             'value'=>'green'
            ],
            ['name'=>'data_background_color',
                'value'=>'black'
            ],
            ['name'=>'background_image',
                'value'=>'http://localhost/SMIS/public/assets/backend/img/sidebar-3.jpg'
            ],
        ]);
    }
}
