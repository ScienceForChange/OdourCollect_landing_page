<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    static public $service = [
        'img'   =>  'map_icon.svg',
        'title' =>  'Heading',
        'text'  =>  'Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Quisque hendrerit mi diam, sit amet volutpat quam.'
    ];

    static public function render()
    {

        return view('front.home', ['service' => self::$service]);
    }
}
