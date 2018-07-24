<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ChangeLanguageController extends Controller
{
    public function switchLanguage($lang)
    {
        Session::put('websiteLanguage', $lang);

        return redirect()->back();
    }
}
