<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function index()
    {
        echo view('MasterData/Barang/barang');
    }
    public function input()
    {
        echo view('MasterData/Barang/InputBarang');
    }
}
