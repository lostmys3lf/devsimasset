<?php

namespace App\Controllers;

use App\Models\LembagaModel; //include akun model di dalam controller
use CodeIgniter\Validation\Rules;

class Lembaga extends BaseController
{
    // protected $lembagamodel;
    // public function __construct()
    // {
    //     $this->lembagamodel=new LembagaModel();
    // }
    // method tambah data
    //add
    public function add()
    {
        // session();
        $lembaga_model = model(LembagaModel::class);
        $kawasan_model = model(KawasanLemModel::class);
        $data=[
            'title'=>'Form Input Lembaga',
            'lembaga'=> $lembaga_model->getLembaga(),
            'kawasan'=> $kawasan_model->getKawasan(),
            'validation' => $this->validator,
            // 'validation' => \Config\Services::validation(),
        ];
        return view('MasterDataView/Lembaga/InputLembaga',$data);
                    
    }
    public function save(){
        $lembaga_model = new LembagaModel();
        // $kawasan_model = model(KawasanLemModel::class);
        // $validation =  \Config\Services::validation();
        // if ($this->request->getMethod() === 'post' && 
        //     $this->validate([
        //     'id_lembaga'=>'required',
        //     'no_kawasan'=>'required',
        //     'nama_lembaga' => 'required|min_length[3]|max_length[50]',
        //     'kode_lokasi'  => 'required',
        //     'kode_pp'  => 'required',
        //     'id_desa'  => 'required',
        //     'alamat'=>'required|min_length[3]|max_length[50]',
        //     'no_telp1'  => 'required',
        //     'no_telp2'=>'required',
        //     'email1'=>'required',
        //     'email2'=>'required',
        //     'web'=>'required',
        //     'upload_foto'=>'is_image[foto]|mime_in[foto,image/jpg,image/png,image/jpeg]',   
        // ],
        // [   //List Custom Pesan Error
            
        //     'id_lembaga' => [
        //         'required' => 'id_lembaga tidak boleh kosong',
        //     ],
        //     'no_kawasan' => [
        //         'required' => 'Alamat tidak boleh kosong',
        //     ],
        //     'nama_lembaga' => [
        //         'required' => 'Nomor HP tidak boleh kosong',
                
        //     ],
        //     'kode_lokasi' => [
        //         'required' => 'Jabatan tidak boleh kosong',
        //     ],
        // ]
        // )){
                // $validation=\Config\Services::validation();
                
                // return redirect()->to('/Lembaga/add')->withInput()->with('validation', $validation);
            
            // dd($this->request->getVar());
        $filefoto=$this->request->getFile('upload_foto');
            if($filefoto->getError()==4){
                $namafoto='default.png';
            }else{

                $namafoto=$filefoto->getName();
                $filefoto->move('img', $namafoto);
            }
        $lembaga_model->save([
            'id_lembaga'=>$this->request->getVar('id_lembaga'),
            'no_kawasan'=>$this->request->getVar('no_kawasan'),
            'nama_lembaga' => $this->request->getVar('nama_lembaga'),                
            'kode_lokasi'  => $this->request->getVar('kode_lokasi'),
            'kode_pp'  => $this->request->getVar('kode_pp'),
            'id_desa'  => $this->request->getVar('id_desa'),
            'alamat'  => $this->request->getVar('alamat'),
            'no_telp1'=>$this->request->getVar('no_telp1'),
            'no_telp2'=>$this->request->getVar('no_telp2'),
            'email1' => $this->request->getVar('email1'),
            'email2' => $this->request->getVar('email2'),
            'web'=>$this->request->getVar('web'),
            'upload_foto' => $namafoto,
        ]);
        return redirect()->to('Lembaga/view');
//     }else{
//     return redirect()->to('Lembaga/add');
// //         echo view('MasterDataView/Lembaga/InputLembaga', [
// //             'title' => 'Input lembaga',
// //             'lembaga'=> $lembaga_model->getLembaga(),
// //             'kawasan'=> $kawasan_model->getKawasan(),
// //             'validation' => $this->validator,
// //         ]
// // );
//     }
}
    public function view(){
        $kawasan_model = model(KawasanLemModel::class);
        $lembaga_model = model(LembagaModel::class);
        $datalembaga = $lembaga_model->getLembaga();
        $kawasan_model = $kawasan_model->getKawasan();
        
        echo view('MasterDataView/Lembaga/View',
                    [
                        'title' => 'Lembaga',
                        'datalembaga' => $datalembaga,
                        'kawasan' => $kawasan_model,
                    ]
                 );
                   
    }
    
   

}
