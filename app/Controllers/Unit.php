<?php

namespace App\Controllers;

use App\Models\UnitModel;

class Unit extends BaseController
{
    // menampilkan data yang sudah diambil dari unitModel
    public function index()
    {
        $pemodelanunit = model(UnitModel::class);
        $dataunit = $pemodelanunit->getData();
        echo view(
            'MasterDataView/Unit/ReadUnit',
            [
                'title' => 'Unit',
                'dataunit' => $dataunit,
            ]
        );
    }
    //menampilkan data berdasarkan ID
    public function viewData($id)
    {

        $unitmodel = model(unitModel::class);
        $dataunit = $unitmodel->getunitBasedOnId($id);
        echo view(
            'MasterDataView/unit/UbahUnit',
            [
                'title' => 'Ubah unit',
                'dataunit' => $dataunit,

            ]
        );
    }
    //program untuk menambahkan data unit
    public function input()
    {
        $unitmodel = model(unitModel::class);
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
            $unitmodel->save(
                [

                    'longitude'  => $this->request->getPost('longitude'),
                    'latitude'  => $this->request->getPost('latitude')

                ]

            );

            $session = session();
            $session->setFlashdata("status_dml", "Sukses Input");

            // redirect ke data unit
            return redirect()->to('unit/index');
        } else {
            echo view(
                'MasterDataView/unit/AddUnit',
                [
                    'title' => 'Input unit',
                    'validation' => $this->validator,
                ]
            );
        }
    }

    //program untuk menghapus data
    public function Delete($id)
    {
        $unit_model = model(unitModel::class);
        $unit_model->Deleteunit($id);
        $session = session();
        $session->setFlashdata("status_dml", "Sukses Delete");
        return redirect()->to('unit/index');
    }

    public function Ubah()
    {
        $unitmodel = model(unitModel::class);
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
            $unitmodel->Ubahunit();
            $session = session();
            $session->setFlashdata("status_dml", "Sukses Input");

            //balikin lagi ke Readunit
            return redirect()->to('unit/index');
        } else {
            $dataunit = $unitmodel->getunitBasedOnId($_POST['id_unit']);
            echo view(
                'MasterDataView/unit/Readunit',
                [
                    'title' => 'Ubah unit',
                    'dataunit' => $dataunit,
                    'validation' => $this->validator,
                ]
            );
        }
    }
    public function IndexImport()
    {
        echo view(
            'MasterDataView/unit/ReadImportunit',
            [
                'title' => 'Ubah unit',


            ]
        );
    }
}
