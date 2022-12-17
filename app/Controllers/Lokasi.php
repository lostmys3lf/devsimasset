<?php

namespace App\Controllers;

class Lokasi extends BaseController
{
    public function index()
    {
        $pemodelanlokasi = model(LokasiModel::class);
        $datalokasi = $pemodelanlokasi->getData();
        echo view(
            'MasterDataView/Lokasi/ReadLokasi',
            [
                'datalokasi' => $datalokasi,
            ]
        );
    }
    public function input()
    {
    }
}
