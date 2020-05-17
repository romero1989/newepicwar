<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('app/home');
    }

    /**
     * Show the application Guild Mark upload file.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function guild()
    {
        return view('app/guildmark');
    }

    public function webindex()
    {
        return view('site.index');
    }
}
