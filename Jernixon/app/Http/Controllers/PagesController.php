<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        return view('pages.index');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function report(){
        return view('pages.report');        
    }

    // public function items(){
    //     return view('pages.items');
    // }

    public function employees(){
        return view('pages.employees');
    }

}
