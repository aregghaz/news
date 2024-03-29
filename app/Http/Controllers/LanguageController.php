<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang(Request $request)
    {
        $lang = $request['lang'];
        if (array_key_exists($lang, Config::get('languages'))) {

           session()->put('applocale', $lang);

        }
        return Redirect::back();
    }
}