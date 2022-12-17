<?php

namespace App\Controllers;

class Tanah extends BaseController
{
    public function index()
    {
        echo view('MasterDataView/Tanah/tanah');
    }
    public function input()
    {
        echo view('MasterDataView/Tanah/InputTanah');
    }
}
