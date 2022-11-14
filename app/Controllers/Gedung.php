<?php

namespace App\Controllers;

class Gedung extends BaseController
{
    public function index()
    {
        echo view('Gedung/gedung');
    }
    public function input()
    {
        echo view('Gedung/InputGedung');
    }
}
