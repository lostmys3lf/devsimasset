<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
        //return view('Templates/all');
    }
     public function dashboard()
    {
        return view('Templates/all');
    }
     public function table()
    {
        return view('Templates/tampilan-database/tampilan-database');
        
    }
}
