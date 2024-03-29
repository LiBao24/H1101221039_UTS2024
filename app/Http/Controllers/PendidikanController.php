<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    function index() {
        return view('pendidikan');
    }
}
