<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisBarangModel extends Model
{
    // atribut tabel diisi dengan nama tabel
    protected $table = 'tbl_jenis_barang';
    protected $primaryKey = 'id_jenis_barang';

    // atribut yang diijinkan untuk diinput menggunakan query builder
    protected $allowedFields = ['id_jenis_barang', 'nama_jenis_barang'];

    // method untuk mendapatkan seluruh data pada tabel kos
    public function getJenisBarang(){
        return $this->findAll();
    }

    // method untuk menghapus data
    public function deletePemasok($id){
        $db = db_connect();
        $builder = $db->table('pemasok');
        $builder->delete(['id_pemasok' => $id]);
    }

    // method untuk viewData berdasarkan id
    public function getJenisBarangBasedOnId($id){
        $db = db_connect();
        $query   = $db->query('SELECT * FROM tbl_jenis_barang WHERE id_jenis_barang = ? ', array($id));
        $results = $query->getResult();
        return $results;
    }

    // input data
    public function create($id_jenis_barang,$nama_jenis_barang){
        $db = db_connect();
        //mendapaatkan id_transaksi terakhir dari seluruh transaksi
        /* $dbResult = $db->query("SELECT IFNULL(MAX(id_kelompok_barang),0) as id_transaksi from view_transaksi");

        $hasil = $dbResult->getResult(); */
        //cacah hasilnya
        /* foreach ($hasil as $row)
        {
            $id_transaksi = $row->id_transaksi;
        }

        $id_transaksi = $id_transaksi+1; */ //naikkan 1 untuk id baru modal yang dimasukkan
        
        $sql = "INSERT INTO tbl_kelompok_barang SET id_kelompok_barang= ?, nama_kelompok_barang=?";
        $hasil = $db->query($sql, array($id_jenis_barang, $nama_jenis_barang));}

    // method untuk update Data pemasok
    public function updatePemasok($telp){
        $db = db_connect();
        $nama_pemasok = htmlspecialchars($_POST['nama_pemasok']);
        $alamat_pemasok = htmlspecialchars($_POST['alamat_pemasok']);


        $data = [
            'nama_pemasok' => $nama_pemasok, 
            'alamat_pemasok'  => $alamat_pemasok,
            'no_telpon_pemasok'  => $telp,
        ];
        $builder = $db->table('pemasok');
        $builder->where('id_pemasok', $_POST['id_pemasok']);
        $builder->update($data);
    }

    // method untuk menampilkan seluruh pemasok terurut berdasarkan nama
    public function getAllOrderByName(){
        $db = db_connect();
        $sql = "SELECT * FROM pemasok 
                ORDER BY nama_pemasok";
        $dbResult = $db->query($sql);
        return $dbResult->getResult();
    }
    
}