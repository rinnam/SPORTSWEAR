<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuManagement extends Controller
{
    //
    public function add_horizontal_menu()
    {
        return view('admin.add_horizontal_menu');
    }

    public function add_vertical_menu()
    {
        return view('admin.add_vertical_menu');
    }
}
