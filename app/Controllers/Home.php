<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function table()
    {
        return view('Templates/tampilan-database/tampilan-database');
    }
}
