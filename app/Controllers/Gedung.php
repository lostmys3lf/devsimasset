<?php

namespace App\Controllers;

class Gedung extends BaseController
{
    public function index()
    {
        echo view('MasterData/Gedung/gedung');
    }
    public function input()
    {
        echo view('MasterData/Gedung/InputGedung');
    }
}
