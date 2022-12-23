<?php

namespace App\Models;

use CodeIgniter\Model;

class KawasanLemModel extends Model
{
    // atribut tabel diisi dengan nama tabel
    protected $table = 'tbl_kawasan';
    // protected $primaryKey = 'no_lembaga';

    // // atribut yang diijinkan untuk diinput menggunakan query builder
    // protected $allowedFields = ['id_lembaga','no_kawasan','nama_lembaga','alamat', 'kode_lokasi','kode_pp','id_desa',
    // 'no_telp1','no_telp2','email1','email2','web','upload_foto'];

    // method untuk mendapatkan seluruh data pada tabel kos
    public function getKawasan(){
        return $this->findAll();
        // $db = db_connect();
        // $sql = "SELECT  tbl_kawasan_no_kawasan, tbl_kawasan.id_kawasan, tbl_lembaga.nama_lembaga, tbl_kawasan.kawasan, tbl_lembaga.alamat, tbl_lembaga.kode_lokasi, tbl_lembaga.kode_pp, tbl_lembaga.id_desa,
        // tbl_lembaga.no_telp1, tbl_lembaga.no_telp2, tbl_lembaga.email1, tbl_lembaga.email2, tbl_lembaga.web, tbl_lembaga.upload_foto FROM tbl_lembaga join tbl_kawasan on tbl_kawasan.no_kawasan=tbl_lembaga.no_lembaga ";

        // $dbResult = $db->query($sql, array());
        // $hasil = $dbResult->getResult();       //hasil dalam bentuk obyek karena tidak ada argumen 'array' 
        // return $hasil;
        
    }
}