<?php

use App\Http\Controllers\CompressController;
use App\Permission;
use Modules\Setting\Entities\Setting;

if (!function_exists('permission_list')) {
    function permission_list($id)
    {
        $permissions = Permission::where('group_id', $id)->get();

        return $permissions;
    }
}

if (!function_exists('get_sidebar_setting')) {
    function get_sidebar_setting()
    {$settings = Setting::select('value')
        ->where('name', 'data_color')//1
        ->orWhere('name','data_background_color')//2
        ->orWhere('name','background_image')//3
        ->orWhere('name','site_title')//0
        ->get();

        return $settings;
    }
}

if (!function_exists('compress_and_store')) {
    function compress_and_store($original)
    {
        $filenamewithextension = $original->getClientOriginalName();
        $extension = $original->getClientOriginalExtension();

        $original->move('copy', $filenamewithextension);

        $file = "copy/" . $filenamewithextension; //file that you wanna compress
//        $file = "aa.jpg"; //file that you wanna compress
        $new_name_image = time(); //name of new file compressed
        $quality = 60; // Value that I chose
        $pngQuality = 9; // Exclusive for PNG files
        $destination = 'storage/'; //This destination must be exist on your project

        $image_compress = new CompressController($file, $new_name_image, $quality, $pngQuality, $destination);

        $image_compress->compress_image();

        File::delete($file);

        $new_file = $new_name_image . '.' . $extension;

//        File::move($new_file,'storage/'.$new_file);

        return $new_file;

    }
}
