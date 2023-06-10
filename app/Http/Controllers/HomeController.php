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

    function homework1() {
        return view('homework.firstWork');
    }

    function inputTest() {
        return view('prac.test');
    }
}
