<?php

namespace App\Http\Controllers;

use App\Pronostic;
use Illuminate\Support\Facades\DB;


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
        $pronos = Pronostic::orderBy('created_at', 'desc')->paginate(3);
        $date = date("Y-m-d");

        return view('home', compact('pronos', 'date'));
    }
}
