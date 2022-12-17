<?php

namespace App\Models;

use CodeIgniter\Model;

class m_maps extends Model
{

    public function getInfoKoordinat()
    {
        $db = db_connect();
        $query = $db->query('SELECT id_kawasan, koordx, koordy From kawasan;');
        $result = $query->getResultArray();
        return $result;
    }
}
