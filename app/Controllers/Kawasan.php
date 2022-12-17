<?php

namespace App\Controllers;

class Kawasan extends BaseController
{
    public function view()
    {
        echo view('MasterDataView/Kawasan/kawasan');
    }
    public function profile()
    {
        echo view('userprofile');
    }
}
