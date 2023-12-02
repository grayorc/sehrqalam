<?php

use Illuminate\Support\Facades\Route;

if(! function_exists('isActive')){
    function isAcvtive($key , $activeClassName = 'active'){
        if(is_array($key)){
            return in_array(Route::currentRouteName(), $key) ? $activeClassName : '';
        }
        if(Route::currentRoutename() == $key){
            return $activeClassName ;
        }else{
            return '';
        }
    }
}
