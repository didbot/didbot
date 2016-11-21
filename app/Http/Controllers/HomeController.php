<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;
use URL;

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

     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        JavaScript::put([
            'apiToken' => 'Bearer ' . env('DIDBOT_API_TOKEN'),
            'baseUrl' => env('DIDBOT_API_URL') ? env('DIDBOT_API_URL') : URL::to('/') . '/'
        ]);

        return view('home');
    }
}
