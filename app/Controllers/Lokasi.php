<?php

namespace App\Controllers;

use App\Models\LokasiModel;

class Lokasi extends BaseController
{
    // menampilkan data yang sudah diambil dari LokasiModel
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
    //menampilkan data berdasarkan ID
    public function viewData($id)
    {

        $lokasimodel = model(LokasiModel::class);
        $datalokasi = $lokasimodel->getlokasiBasedOnId($id);
        echo view(
            'MasterDataView/Lokasi/UbahLokasi',
            [
                'title' => 'Ubah lokasi',
                'datalokasi' => $datalokasi,

            ]
        );
    }
    //program untuk menambahkan data lokasi
    public function input()
    {
        $lokasimodel = model(LokasiModel::class);
        $validation =  \Config\Services::validation();
        if (
            $this->request->getPost() &&
            $this->validate(
                [
                    'longitude'  => 'required|min_length[5]|max_length[20]',
                    'latitude'  => 'required|min_length[5]|max_length[20]',
                ],
                [   //List Custom Pesan Error
                    'longitude' => [
                        'required' => 'inputan tidak boleh kosong',
                        'min_length' => 'Panjang longitude tidak boleh kurang dari 5',
                        'max_length' => 'Panjang longitude tidak boleh lebih dari 20',
                    ],
                    'latitude' => [
                        'required' => 'inputan tidak boleh kosong',
                        'min_length' => 'Panjang latitude tidak boleh kurang dari 5',
                        'max_length' => 'Panjang latitude tidak boleh lebih dari 20',
                    ],
                ]
            )
        ) {
            // kalau masuk ke sini berarti sudah sesuai dengan rule yang dikehendaki
            // maka langsung masukkan ke database
            $lokasimodel->save(
                [

                    'longitude'  => $this->request->getPost('longitude'),
                    'latitude'  => $this->request->getPost('latitude')

                ]

            );

            $session = session();
            $session->setFlashdata("status_dml", "Sukses Input");

            // redirect ke data lokasi
            return redirect()->to('Lokasi/index');
        } else {
            echo view(
                'MasterDataView/Lokasi/AddLokasi',
                [
                    'title' => 'Input Lokasi',
                    'validation' => $this->validator,
                ]
            );
        }
    }

    //program untuk menghapus data
    public function Delete($id)
    {
        $lokasi_model = model(LokasiModel::class);
        $lokasi_model->DeleteLokasi($id);
        $session = session();
        $session->setFlashdata("status_dml", "Sukses Delete");
        return redirect()->to('Lokasi/index');
    }

    public function Ubah()
    {
        $lokasimodel = model(LokasiModel::class);
        $validation = \config\Services::validation();

        if (
            $this->request->getPost() &&
            $this->validate(
                [
                    'longitude'  => 'required|min_length[5]|max_length[20]',
                    'latitude'  => 'required|min_length[5]|max_length[20]',
                ],
                [   //List Custom Pesan Error
                    'longitude' => [
                        'required' => 'inputan tidak boleh kosong',
                        'min_length' => 'Panjang longitude tidak boleh kurang dari 5',
                        'max_length' => 'Panjang longitude tidak boleh lebih dari 20',
                    ],
                    'latitude' => [
                        'required' => 'inputan tidak boleh kosong',
                        'min_length' => 'Panjang latitude tidak boleh kurang dari 5',
                        'max_length' => 'Panjang latitude tidak boleh lebih dari 20',
                    ],
                ]
            )
        ) {
            //masuk ke database
            $lokasimodel->UbahLokasi();
            $session = session();
            $session->setFlashdata("status_dml", "Sukses Input");

            //balikin lagi ke ReadLokasi
            return redirect()->to('Lokasi/index');
        } else {
            $datalokasi = $lokasimodel->getlokasiBasedOnId($_POST['id_lokasi']);
            echo view(
                'MasterDataView/Lokasi/ReadLokasi',
                [
                    'title' => 'Ubah lokasi',
                    'datalokasi' => $datalokasi,
                    'validation' => $this->validator,
                ]
            );
        }
    }
    public function IndexImport()
    {
        echo view(
            'MasterDataView/Lokasi/ReadImportLokasi',
            [
                'title' => 'Ubah lokasi',


            ]
        );
    }
}
