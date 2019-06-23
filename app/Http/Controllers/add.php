<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add extends Controller
{
    public function new () {
        return view('addnew');
    }
}
