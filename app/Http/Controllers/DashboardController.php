<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard')
            ->with('full_name', "Yasmine Nasvisha Andhani");
    }
}
