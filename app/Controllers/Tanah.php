<?php

namespace App\Controllers;

class Tanah extends BaseController
{
    public function index()
    {
        echo view('MasterData/Tanah/tanah');
    }
    public function input()
    {
        echo view('MasterData/Tanah/InputTanah');
    }
}
