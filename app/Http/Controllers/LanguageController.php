<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (in_array($lang, array_keys(config('systemlang.locales')))) {
            session()->put('locale', $lang);
        }
        return redirect()->back();
    }
}
