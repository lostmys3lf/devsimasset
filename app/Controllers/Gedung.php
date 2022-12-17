<?php

namespace App\Controllers;

class Gedung extends BaseController
{
    public function index()
    {
        echo view('MasterDataView/Gedung/gedung');
    }
    public function input()
    {
        echo view('MasterDataView/Gedung/InputGedung');
    }
}
