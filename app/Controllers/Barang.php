<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function index()
    {
        echo view('MasterDataView/Barang/barang');
    }
    public function input()
    {
        echo view('MasterDataView/Barang/InputBarang');
    }
}
