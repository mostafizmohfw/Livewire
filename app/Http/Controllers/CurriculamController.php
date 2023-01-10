<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculamController extends Controller
{
    public function index() {
        return view('curriculam.index');
    }
}
