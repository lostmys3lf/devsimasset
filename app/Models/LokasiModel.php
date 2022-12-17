<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $table = 'tbl_lokasi';
    protected $primarykey = 'id_lokasi';

    // atribut yang diijinkan untuk diinput menggunakan query builder
    protected $allowedFields = ['longitude', 'latitude'];

    // mengambil data dari database
    public function getData()
    {
        return $this->findAll();
    }

    // method untuk menghapus data
    public function DeleteLokasi($id)
    {
        $db = db_connect();
        $builder = $db->table('tbl_lokasi');
        $builder->delete(['id_lokasi' => $id]);
    }

    // method untuk viewData berdasarkan id
    public function getlokasiBasedOnId($id)
    {
        $db = db_connect();
        $query   = $db->query('SELECT * FROM tbl_lokasi WHERE id_lokasi = ? ', array($id));
        $results = $query->getResult();
        return $results;
    }
}
