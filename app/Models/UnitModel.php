<?php

namespace App\Models;

use CodeIgniter\Model;

class unitModel extends Model
{
    protected $table = 'tbl_unit';
    protected $primarykey = 'id_unit';

    // atribut yang diijinkan untuk diinput menggunakan query builder
    protected $allowedFields = ['nama_unit', 'id_lembaga'];

    // mengambil data dari database
    public function getData()
    {
        return $this->findAll();
    }

    // method untuk menghapus data
    public function Deleteunit($id)
    {
        $db = db_connect();
        $builder = $db->table('tbl_unit');
        $builder->delete(['id_unit' => $id]);
    }

    // method untuk viewData berdasarkan id
    public function getunitBasedOnId($id)
    {
        $db = db_connect();
        $query   = $db->query('SELECT * FROM tbl_unit WHERE id_unit = ? ', array($id));
        $results = $query->getResult();
        return $results;
    }

    public function Ubahunit()
    {
        $db = db_connect();
        $data = [
            'nama_unit' => $_POST['nama_unit'],
            'id_lembaga' => $_POST['id_lembaga']
        ];
        $builder = $db->table('tbl_unit');
        $builder->where('id_unit', $_POST['id_unit']);
        $builder->update($data);
    }
}
