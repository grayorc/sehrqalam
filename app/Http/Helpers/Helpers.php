<?php

use App\Models\Shahr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

function getCitiesByOstan($ostanId)
{
    return Shahr::where('ostan', $ostanId)->get();
}

function createDownloadLink($path,$minuets = 10, $name = 'download.file'){
    $path = "/private/" . $path;
    return URL::temporarySignedRoute($name , now()->addMinute($minuets),['user' => auth()->user()->id , 'path' => $path]);
}
