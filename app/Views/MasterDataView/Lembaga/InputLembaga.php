<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Input Lembaga</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input Lembaga</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <!-- <button type="button" class="btn btn-primary">Settings</button> -->
                    <!-- <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span> -->
                    <!-- </button> -->
                    
                </div>
            </div>
        </div>
        
        <!--end breadcrumb-->
        
        <form class="row g-3" action="<?=base_url('Lembaga/save')?>" method="post" enctype="multipart/form-data" >
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="/assets/images/avatars/avatar-1.png" alt="Admin" class="rounded p-1 bg-primary" width="110">
                                    <!-- <label for="formFileMultiple" class="form-label"></label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple> -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <!-- <img src="assets/images/avatars/avatar-1.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110"> -->
                                    <label for="formFileMultiple" class="form-label"></label>
                                    <input class="form-control" type="file" id="upload_foto" name="upload_foto" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Id Lembaga</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="id_lembaga" name="id_lembaga" value="<?= set_value('id_lembaga')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                            <div id="errorlembaga" class="invalid-feedback"></div>
                                            <?php
                                            if(isset($validation)){
                                                if($validation->getError('id_lembaga')){?>
                                                <script>
                                                    document.getElementById('id_lembaga').setAttribute("class","form-control is-invalid");
                                                    document.getElementById('errorlembaga').innerHTML="<?= $validation->getError('id_lembaga');?>";
                                                </script>
                                                <?php
                                                }else{
                                                    ?>
                                                    <script>
                                                        document.getElementById('id_lembaga').setAttribute("class","form-control is-valid");
                                                        document.getElementById('errorlembaga').innerHTML="";
                                                    </script>
                                                    <?php
                                                }
                                            }
                                            ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Id Kawasan</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <!-- <input type="text" class="form-control" id="no_kawasan" name="no_kawasan" value="<?//= set_value('no_kawasan')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland"> -->
                                    <!-- <label for="id_kawasan" class="col-sm-2 col-form-label">Pilih Kawasan</label> -->
                                    
                                            <select class="form-select" aria-label="Default select example" id="no_kawasan" name="no_kawasan">
                                            <option value="#" disabled selected>Pilih Kawasan</option>
                                                <?php
                                                    //looping pegawai
                                                    foreach($kawasan as $row):
                                                        $no_kawasan = $row['no_kawasan'];
                                                        $id_kawasan = $row['id_kawasan'];
                                                        
                                                        if(set_value('no_kawasan')==$no_kawasan){
                                                        ?>
                                                            <option value="<?= $no_kawasan ?>" selected><?= $id_kawasan?></option>
                                                        <?php
                                                         }else{
                                                        ?>
                                                            <option value="<?= $no_kawasan ?>" selected><?= $id_kawasan?></option>
                                                        <?php
                                                         }
                                                    endforeach;
                                                ?>
                                            </select>
                                            <!-- <div id="erroridp" class="invalid-feedback"></div> -->
                                        <div id="errorkawasan" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('no_kawasan')){?>
                                            <script>
                                                document.getElementById('no_kawasan').setAttribute("class","form-control is-invalid");
                                                document.getElementById('errorkawasan').innerHTML="<?= $validation->getError('no_kawasan');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('no_kawasan').setAttribute("class","form-control is-valid");
                                                    document.getElementById('errorkawasan').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama Lembaga</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" value="<?= set_value('nama_lembaga')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="errorlnama" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('nama_lembaga')){?>
                                            <script>
                                                document.getElementById('nama_lembaga').setAttribute("class","form-control is-invalid");
                                                document.getElementById('errorlnama').innerHTML="<?= $validation->getError('nama_lembaga');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('nama_lembaga').setAttribute("class","form-control is-valid");
                                                    document.getElementById('errorlnama').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Kode Lokasi</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="kode_lokasi" name="kode_lokasi" value="<?= set_value('kode_lokasi')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="errorlokasi" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('kode_lokasi')){?>
                                            <script>
                                                document.getElementById('kode_lokasi').setAttribute("class","form-control is-invalid");
                                                document.getElementById('errorlokasi').innerHTML="<?= $validation->getError('kode_lokasi');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('kode_lokasi').setAttribute("class","form-control is-valid");
                                                    document.getElementById('errorlokasi').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Kode PP</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="kode_pp" name="kode_pp" value="<?= set_value('kode_pp')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="errorpp" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('kode_pp')){?>
                                            <script>
                                                document.getElementById('kode_pp').setAttribute("class","form-control is-invalid");
                                                document.getElementById('errorpp').innerHTML="<?= $validation->getError('kode_pp');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('kode_pp').setAttribute("class","form-control is-valid");
                                                    document.getElementById('errorpp').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Id Desa</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="id_desa" name="id_desa" value="<?= set_value('id_desa')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="errordesa" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('id_desa')){?>
                                            <script>
                                                document.getElementById('id_desa').setAttribute("class","form-control is-invalid");
                                                document.getElementById('errordesa').innerHTML="<?= $validation->getError('id_desa');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('id_desa').setAttribute("class","form-control is-valid");
                                                    document.getElementById('errordesa').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="erroralamat" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('alamat')){?>
                                            <script>
                                                document.getElementById('alamat').setAttribute("class","form-control is-invalid");
                                                document.getElementById('erroralamat').innerHTML="<?= $validation->getError('alamat');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('alamat').setAttribute("class","form-control is-valid");
                                                    document.getElementById('erroralamat').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">No. Telp 1</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="no_telp1" name="no_telp1" value="<?= set_value('no_telp1')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="errortelp1" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('no_telp1')){?>
                                            <script>
                                                document.getElementById('no_telp1').setAttribute("class","form-control is-invalid");
                                                document.getElementById('errortelp1').innerHTML="<?= $validation->getError('no_telp1');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('no_telp1').setAttribute("class","form-control is-valid");
                                                    document.getElementById('errortelp1').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">No. Telp 2</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="no_telp2" name="no_telp2" value="<?= set_value('no_telp2')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="errortelp2" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('no_telp2')){?>
                                            <script>
                                                document.getElementById('no_telp2').setAttribute("class","form-control is-invalid");
                                                document.getElementById('errortelp2').innerHTML="<?= $validation->getError('no_telp2');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('no_telp2').setAttribute("class","form-control is-valid");
                                                    document.getElementById('errortelp2').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email 1</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="email1" name="email1" value="<?= set_value('email1')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="erroremail1" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('email1')){?>
                                            <script>
                                                document.getElementById('email1').setAttribute("class","form-control is-invalid");
                                                document.getElementById('erroremail1').innerHTML="<?= $validation->getError('email1');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('email1').setAttribute("class","form-control is-valid");
                                                    document.getElementById('erroremail1').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email 2</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="email2" name="email2" value="<?= set_value('email2')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="erroremail2" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('email2')){?>
                                            <script>
                                                document.getElementById('email2').setAttribute("class","form-control is-invalid");
                                                document.getElementById('erroremail2').innerHTML="<?= $validation->getError('email2');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('email2').setAttribute("class","form-control is-valid");
                                                    document.getElementById('erroremail2').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Web</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="web" name="web" value="<?= set_value('web')?>" placeholder="Masukkan Nama Pegawai, cth: Tom Holland">
                                        <div id="errorweb" class="invalid-feedback"></div>
                                        <?php
                                        if(isset($validation)){
                                            if($validation->getError('web')){?>
                                            <script>
                                                document.getElementById('web').setAttribute("class","form-control is-invalid");
                                                document.getElementById('errorweb').innerHTML="<?= $validation->getError('web');?>";
                                            </script>
                                            <?php
                                            }else{
                                                ?>
                                                <script>
                                                    document.getElementById('web').setAttribute("class","form-control is-valid");
                                                    document.getElementById('errorweb').innerHTML="";
                                                </script>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                               
                                <br>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Submit" />
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        </div>
                                    </form>
                       
                </div>
            </div>
        </div>
    </div>
</div>

<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2021. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->
<?= $this->endsection('konten'); ?>