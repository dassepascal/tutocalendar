<?php

namespace App\Http\Controllers;

use App\Models\Month;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        $months=Month::all();



        return view('calendar',[
            'months'=>$months
            
                ]);
    }
}
