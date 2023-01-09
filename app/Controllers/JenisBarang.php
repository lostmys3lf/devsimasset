<?php

namespace App\Controllers;

use App\Models\JenisBarangModel; //include model di dalam controller

class JenisBarang extends BaseController
{
    public function index() //function untuk view data tabel
    {
        $jenis_barang_model = model(JenisBarangModel::class);
        $datajenisbarang = $jenis_barang_model->getJenisBarang();
        echo view('MasterDataView/JenisBarang/Read',
                    [
                        'datajenisbarang' => $datajenisbarang,
                    ]
                 );
    }

    public function view_createform(){
        echo view('MasterDataView/JenisBarang/Create');
    }

    public function create()
    {
        // $kelompok_barang_model = model(KelompokBarangModel::class);
        $jenis_barang_model = new JenisBarangModel();
        $id_jenis_barang = $this->request->getPost('id_jenis_barang');
        $nama_jenis_barang = $this->request->getPost('nama_jenis_barang');

        $jenis_barang_model->create($id_jenis_barang,$nama_jenis_barang);
        return redirect()->to("JenisBarang/index");
    }
}
