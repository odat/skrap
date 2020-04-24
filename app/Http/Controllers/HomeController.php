<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        $url = config('skrap.API_URL');
        $token = config('skrap.SKRAP_TOKEN');

        $inputData = array('filter' => 1,
            'month' => '',
            'role_type' => '0',
            'user_id' => 47,
            'year' => '');

        $response = Http::withToken($token)->post($url, $inputData);

        $data = '';

        if($response->successful())
        {
            $data =  $response->throw()->json();
        }

        return view('home', ['data' => $data]);
    }
}
