<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function index() //Menampilkan Data Barang
    {
        echo view('MasterDataView/Barang/barang');
    }
    public function input()
    {
        echo view('MasterDataView/Barang/InputBarang');

    }
}
