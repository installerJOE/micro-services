<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // method for generating slug
    public function slug_generator($title){
        $main_title_arr = explode(' ', $title);
        $slug = strtolower(join('-', $main_title_arr));
        return $slug;
    }

    // method for initializing a nullable input during data storage or update
    public function nullableInput($input){
        if(isset($input)){
            return $input;
        }
        return 0;
    }
}
