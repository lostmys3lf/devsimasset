<?php

namespace App\Controllers;

class Tanah extends BaseController
{
    public function index()
    {
        echo view('Tanah/tanah');
    }
    public function input()
    {
        echo view('Tanah/InputTanah');
    }
}
