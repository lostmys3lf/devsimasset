<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Master Data</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input Kelompok Barang</li>
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

        <!-- <form class="row g-3" action="<?=base_url('KelompokBarang/create')?>" method="post">
            <div class="mb-3 row">
                <label for="id_kelompok_barang" class="col-sm-2 col-form-label">Id Kelompok Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_kelompok_barang" name="id_kelompok_barang" value="<?= set_value('id_kelompok_barang')?>" placeholder="Masukkan ID Kel Barang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_kelompok_barang" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_kelompok_barang" name="nama_kelompok_barang" value="<?= set_value('nama_kelompok_barang')?>" placeholder="Masukkan Nama Kel Barang">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-5"></div>
                <input class="col-sm-1 btn btn-success" type="submit" value="Input">
                <div class="col-sm-5"></div>
            </div>
            
            
        </form> -->

        <form class="row g-3" action="<?=base_url('KelompokBarang/create')?>" method="post">
            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">ID Kelompok Barang</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            <input type="text" class="form-control" id="id_kelompok_barang" name="id_kelompok_barang"  />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Nama Barang</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            <input type="text" class="form-control" id="nama_kelompok_barang" name="nama_kelompok_barang"  />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-sm-7 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Submit" />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                                </div>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-lg-6">
                        </div>
                    </div>
                </div>
            </div>
        </form>
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