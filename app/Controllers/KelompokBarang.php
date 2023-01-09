<?php

namespace App\Controllers;

use App\Models\KelompokBarangModel; //include model di dalam controller

class KelompokBarang extends BaseController
{
    public function index() //function untuk view data tabel
    {
        $kelompok_barang_model = model(KelompokBarangModel::class);
        $datakelompokbarang = $kelompok_barang_model->getKelompokBarang();
        echo view('MasterDataView/KelompokBarang/Read',
                    [
                        'datakelompokbarang' => $datakelompokbarang,
                    ]
                 );
    }

    public function view_createform(){
        echo view('MasterDataView/KelompokBarang/Create');
    }

    public function create()
    {
        // $kelompok_barang_model = model(KelompokBarangModel::class);
        $kelompok_barang_model = new KelompokBarangModel();
        $id_kelompok_barang = $this->request->getPost('id_kelompok_barang');
        $nama_kelompok_barang = $this->request->getPost('nama_kelompok_barang');

        $kelompok_barang_model->create($id_kelompok_barang,$nama_kelompok_barang);
        return redirect()->to("KelompokBarang/index");
    }
}
