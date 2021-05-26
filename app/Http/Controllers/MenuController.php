<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
    function menu(Request $req)
    {
        return menu::get('*');
    }
}