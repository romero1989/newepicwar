<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function __construct()
    {
     //   $this->middleware('auth');
    }

    public function index()
    {
        return view('site/index');
    }

    public function pagina()
    {
        return view('site/pagina');
    }

    public function regras()
    {
        return view('site/regras');
    }
}
