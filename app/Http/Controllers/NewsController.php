<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{



    public function login()
    {
        return view('login');
    }
    public function index(Request $request)
    {
        $request->validate([
            'firstname' => 'required | min:5',
            'lastname' => 'required',

        ]);
        dd($request->all());
        return redirect('home');
    }
}
