<?php

namespace App\Controllers;

use App\Models\Kawasan1Model;

class Kawasan1 extends BaseController
{
    // menampilkan data yang sudah diambil dari kawasan1Model
    public function index()
    {
        $pemodelankawasan1 = model(Kawasan1Model::class);
        $datakawasan1 = $pemodelankawasan1->getData();
        echo view(
            'MasterDataView/Kawasan1/View',
            [
                'title' => 'kawasan1',
                'datakawasan1' => $datakawasan1,
            ]
        );
    }
    //menampilkan data berdasarkan ID
    public function viewData($id)
    {

        $kawasan1model = model(kawasan1Model::class);
        $datakawasan1 = $kawasan1model->getkawasan1BasedOnId($id);
        echo view(
            'MasterDataView/Kawasan/Ubahkawasan1',
            [
                'title' => 'Ubah kawasan1',
                'datakawasan1' => $datakawasan1,

            ]
        );
    }
    //program untuk menambahkan data kawasan1
    public function input()
    {
        $kawasan1model = model(Kawasan1Model::class);
        $validation =  \Config\Services::validation();
        if (
            $this->request->getPost() &&
            $this->validate(
                [
                    'id_kawasan' => 'required|min_length[3]|max_length[5]',
                    'kawasan'  => 'required',
                    'koordx'  => 'required',
                    'koordy'  => 'required',
                    'master_plan'  => 'required',
                    'amdal'  => 'required',
                    'andalalin'  => 'required',
                    'luas'  => 'required',
                ],
                [   //List Custom Pesan Error
                    'id_kawasan' => [
                        'required' => 'Nama tidak boleh kosong',
                        'min_length' => 'Panjang tidak boleh kurang dari 3',
                        'max_length' => 'Panjang tidak boleh lebih dari 5',
                    ],
                    'kawasan' => [
                        'required' => 'Kawasan tidak boleh kosong',
                    ],
                    'koordx' => [
                        'required' => 'Titik Koordinat X tidak boleh kosong',
                    ],
                    'koordy' => [
                        'required' => 'Titik Koordinat Y tidak boleh kosong',
                    ],
                    'master_plan' => [
                        'required' => 'Master Plan tidak boleh kosong',
                    ],
                    'amdal' => [
                        'required' => 'Amdal tidak boleh kosong',
                    ],
                    'andalalin' => [
                        'required' => 'Andalalin tidak boleh kosong',
                    ],
                    'luas' => [
                        'required' => 'Alamat tidak boleh kosong',
                    ],
                ]
            )
        ) {
            // kalau masuk ke sini berarti sudah sesuai dengan rule yang dikehendaki
            // maka langsung masukkan ke database
            $kawasan1model->save(
                [
                    'id_kawasan' => $this->request->getPost('id_kawasan'),
                    'kawasan' => $this->request->getPost('kawasan'),
                    'koordx' => $this->request->getPost('koordx'),
                    'koordy'  => $this->request->getPost('koordy'),
                    'master_plan'  => $this->request->getPost('master_plan'),
                    'amdal'  => $this->request->getPost('amdal'),
                    'andalalin'  => $this->request->getPost('andalalin'),
                    'luas'  => $this->request->getPost('luas'),
                ]
            );

            $session = session();
            $session->setFlashdata("status_dml", "Sukses Input");

            // redirect ke data kawasan1
            return redirect()->to('kawasan1/index');
        } else {
            echo view(
                'MasterDataView/Kawasan1/Add',
                [
                    'title' => 'Input Kawasan',
                    'validation' => $this->validator,
                ]
            );
        }
    }

    //program untuk menghapus data
    public function Delete($id)
    {
        $kawasan1_model = model(kawasan1Model::class);
        $kawasan1_model->Deletekawasan1($id);
        $session = session();
        $session->setFlashdata("status_dml", "Sukses Delete");
        return redirect()->to('kawasan1/index');
    }

    public function Ubah()
    {
        $kawasan1model = model(kawasan1Model::class);
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
            $kawasan1model->Ubahkawasan1();
            $session = session();
            $session->setFlashdata("status_dml", "Sukses Input");

            //balikin lagi ke Readkawasan1
            return redirect()->to('kawasan1/index');
        } else {
            $datakawasan1 = $kawasan1model->getkawasan1BasedOnId($_POST['id_kawasan1']);
            echo view(
                'MasterDataView/kawasan1/Readkawasan1',
                [
                    'title' => 'Ubah kawasan1',
                    'datakawasan1' => $datakawasan1,
                    'validation' => $this->validator,
                ]
            );
        }
    }
    public function IndexImport()
    {
        echo view(
            'MasterDataView/kawasan1/ReadImportkawasan1',
            [
                'title' => 'Ubah kawasan1',


            ]
        );
    }
}
