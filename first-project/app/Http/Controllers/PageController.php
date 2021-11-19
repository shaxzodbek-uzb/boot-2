<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome($name = null)
    {
        $arr = [
        'Shaxzodbek',
        'Azizbek',
        'Bekzod'
        ];
        return view('salomlashish.welcome', compact('name', 'arr'));
        
    }
}