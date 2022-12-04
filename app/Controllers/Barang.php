<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function index()
    {
        echo view('Barang/barang');
    }
    public function input()
    {
        echo view('Barang/InputBarang');
    }
}