<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Qaza_Prayer extends Controller
{
    public function index(){
        $date = new DateTime();
        return view('welcome', $date);
    }
}
