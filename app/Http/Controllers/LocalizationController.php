<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LocalizationController extends Controller
{
    
    public function setLang($locale){
        App::setLocale($locale);
        Session::put("locale",$locale);
        return redirect()->back();
    }
}
