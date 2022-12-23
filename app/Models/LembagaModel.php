<?php

namespace App\Models;

use CodeIgniter\Model;

class LembagaModel extends Model
{
    // atribut tabel diisi dengan nama tabel
    protected $table = 'tbl_lembaga';
    protected $primaryKey = 'no_lembaga';

    // atribut yang diijinkan untuk diinput menggunakan query builder
    protected $allowedFields = ['id_lembaga','no_kawasan','nama_lembaga','alamat', 'kode_lokasi','kode_pp','id_desa',
    'no_telp1','no_telp2','email1','email2','web','upload_foto'];

    // method untuk mendapatkan seluruh data pada tabel kos
    public function getLembaga(){
        // return $this->findAll();
        $db = db_connect();
        $sql = "SELECT tbl_lembaga.id_lembaga, tbl_lembaga.no_kawasan, tbl_kawasan.id_kawasan, tbl_lembaga.nama_lembaga, tbl_kawasan.kawasan, tbl_lembaga.alamat, tbl_lembaga.kode_lokasi, tbl_lembaga.kode_pp, tbl_lembaga.id_desa,
        tbl_lembaga.no_telp1, tbl_lembaga.no_telp2, tbl_lembaga.email1, tbl_lembaga.email2, tbl_lembaga.web, tbl_lembaga.upload_foto FROM tbl_lembaga join tbl_kawasan on tbl_kawasan.no_kawasan=tbl_lembaga.no_kawasan ";

        $dbResult = $db->query($sql, array());
        $hasil = $dbResult->getResult();       //hasil dalam bentuk obyek karena tidak ada argumen 'array' 
        return $hasil;
        
    }
    public function getKawasan(){
        // return $this->findAll();
        $db = db_connect();
        $sql = "SELECT tbl_lembaga.id_lembaga, tbl_kawasan.no_kawasan,tbl_kawasan.id_kawasan, tbl_lembaga.nama_lembaga, tbl_kawasan.kawasan FROM tbl_lembaga join tbl_kawasan on tbl_kawasan.no_kawasan=tbl_lembaga.no_lembaga ";

        $dbResult = $db->query($sql, array());
        $hasil = $dbResult->getResult();       //hasil dalam bentuk obyek karena tidak ada argumen 'array' 
        return $hasil;
    }
    public function add(){
        $db = db_connect();
        $id_lembaga = $_POST['id_lembaga'];
        $no_kawasan = $_POST['no_kawasan'];
        $nama_lembaga = $_POST['nama_lembaga'];
        $kode_lokasi = $_POST['kode_lokasi'];
        $kode_pp = $_POST['kode_pp'];
        $id_desa = $_POST['id_desa'];
        $alamat = $_POST['alamat'];
        $no_telp1 = $_POST['no_telp1'];
        $no_telp2 = $_POST['no_telp2'];
        $email1 = $_POST['email1'];
        $email2 = $_POST['email2'];
        $web = $_POST['web'];
        $upload_foto = $_POST['upload_foto'];
    
        $data = [
            'id_lembaga' => $id_lembaga,
            'no_kawasan' => $no_kawasan,
            'nama_lembaga' => $nama_lembaga,
            'kode_lokasi' => $kode_lokasi,
            'kode_pp' => $kode_pp,
            'id_desa' => $id_desa,
            'alamat' => $alamat,
            'no_telp1' => $no_telp1,
            'no_telp2' => $no_telp2,
            'email1' => $email1,
            'email2' => $email2,
            'web' => $web,
            'upload_foto' => $upload_foto,
        ];
        $builder = $db->table('tbl_lembaga');
        //$builder->where('id_penggajian', $_POST['id_penggajian']);
        $builder->insert($data);
    
        }

    // method untuk menghapus data
    public function deletePegawai($id_pegawai){
        $db = db_connect();
        $builder = $db->table('pegawai');
        $builder->delete(['id_pegawai' => $id_pegawai]);
    }

    // method untuk viewData berdasarkan id
    public function getLembagaBasedOnId($id_lembaga){
        $db = db_connect();
        $query   = $db->query('SELECT * FROM tbl_lembaga WHERE id_lembaga = ? ', array($id_lembaga));
        $results = $query->getResult();
        return $results;
    }

    // method untuk updateData kosan
    public function updatePegawai(){
        $db = db_connect();
        // $filefoto=$this->request->getFile('foto');
        //     if($filefoto->getError()==4){
        //         $namafoto=$this->request->getVar('foto');

        //     }else{
        //         $namafoto=$filefoto->getName();
        //         $filefoto->move('img', $namafoto);
        //         unlink('img/' .$this->request->getVar('fotolama'));
        //     }
        $nik=$_POST['nik'];
        $no_hp=$_POST['no_hp'];
        $result = preg_replace("/[^0-9]/", "", $nik);
        $preg = preg_replace("/[^0-9]/", "", $no_hp);

        $data = [
            'foto' => $_POST['foto'],
            'nama_pegawai' => $_POST['nama_pegawai'], //nama adalah atribut database, sedangkan nama_kos adalah nama input formnya
            'nik'  => $result,//$_POST['nik'],
            'jenis_kelamin'  => $_POST['jenis_kelamin'],
            'alamat'  => $_POST['alamat'], //alamat adalah atribut di database, sedangkan alamat kos adalah input formnya
            'no_hp'  => $preg,//$_POST['no_hp'],
            'jabatan'  => $_POST['jabatan'],
        ];
        $builder = $db->table('pegawai');
        $builder->where('id_pegawai', $_POST['id_pegawai']);
        $builder->update($data);
    }
   
    
}