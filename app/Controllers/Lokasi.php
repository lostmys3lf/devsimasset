<?php

namespace App\Controllers;

class Lokasi extends BaseController
{
    public function index()
    {
        echo view('MasterDataView/Lokasi/ReadLokasi');
    }
    public function input()
    {
        echo view('MasterDataView/Gedung/InputGedung');
    }
}
