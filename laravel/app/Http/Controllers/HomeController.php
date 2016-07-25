<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Appeal;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	
		$appeals = Appeal::where('status', '<>', 'STATUS_CLOSED')->get();
		
        return view('home', compact('appeals'));
    }
}