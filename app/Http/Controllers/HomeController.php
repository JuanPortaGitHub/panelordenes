<?php

namespace App\Http\Controllers;

use App\Ot;
use App\User;
use Illuminate\Routing\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ordenes.listaot');
    }


}
