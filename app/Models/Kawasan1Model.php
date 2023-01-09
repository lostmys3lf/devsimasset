<?php

namespace App\Models;

use CodeIgniter\Model;

class Kawasan1Model extends Model
{
    protected $table = 'tbl_kawasan';
    protected $primarykey = 'id_kawasan';

    // atribut yang diijinkan untuk diinput menggunakan query builder
    protected $allowedFields = ['id_kawasan', 'kawasan', 'koordx', 'koordy', 'master_plan', 'amdal', 'andalalin', 'luas'];

    // mengambil data dari database
    public function getData()
    {
        return $this->findAll();
    }

    // method untuk menghapus data
    public function Deletekelompok($id)
    {
        $db = db_connect();
        $builder = $db->table('tbl_kelompok');
        $builder->delete(['id_kelompok' => $id]);
    }

    // method untuk viewData berdasarkan id
    public function getkelompokBasedOnId($id)
    {
        $db = db_connect();
        $query   = $db->query('SELECT * FROM tbl_kelompok_barang WHERE id_kelompok_barang = ? ', array($id));
        $results = $query->getResult();
        return $results;
    }

    public function Ubahkelompok()
    {
        $db = db_connect();
        $data = [
            'longitude' => $_POST['longitude'],
            'latitude' => $_POST['latitude']
        ];
        $builder = $db->table('tbl_kelompok');
        $builder->where('id_kelompok', $_POST['id_kelompok']);
        $builder->update($data);
    }
}
