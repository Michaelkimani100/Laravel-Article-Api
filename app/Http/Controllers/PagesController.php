<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function index()
    {
        return view('index');
    }
    public function design()
    {
        return view('design');
    }
    public function index2()
    {
        return view('index2');
    }
    public function tabler()
    {
        return view('tabler');
    }
    public function chart()
    {
        return view('chart');
    }
}
