<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function apotek()
    {
        return view('apotek.index');
    }

    public function detail()
    {
        return view('detail.index');
    }
    public function contact_us(){
        return view('contactus.index');
    }
}
