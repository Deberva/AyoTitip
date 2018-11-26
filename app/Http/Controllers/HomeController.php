<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\ReequestModel;
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
        $trip = trip::all();
        $req = ReequestModel::all();
        return view('user.index',compact('trip','req'));
    }
}
