<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $table = 'tbl_lokasi';

    public function getData()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM tbl_lokasi');
        $results = $query->getResult('array');
        return $results;
    }
}
