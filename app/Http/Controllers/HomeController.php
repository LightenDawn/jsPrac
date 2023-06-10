<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('welcome');
    }

    function first() {
        return view('prac.first');
    }

    function basic() {
        return view('prac.basic');
    }
}
