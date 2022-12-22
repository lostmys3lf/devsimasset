<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Master Data</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="<?= base_url("Home/dashboard") ?>"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= esc($title) ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <h6 class="mb-0 text-uppercase"><?= esc($title) ?></h6>
                <hr />
                <?php
                foreach ($datalokasi as $row) {
                    $id_lokasi = $row->id_lokasi;
                    $longitude = $row->longitude;
                    $latitude = $row->latitude;
                }

                ?>
                <form class="row mt-4" action="<?= base_url('Lokasi/Ubah') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-2 col-form-label">Id Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" id="id_lokasi" name="id_lokasi" class="form-control" value="<?= $id_lokasi ?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="longitude" class="col-sm-2 col-form-label">longitude</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $longitude ?>" placeholder="Masukkan longitude, cth: asdasd" pattern="[0-9_.-]+">
                            <div class="invalid-feedback" id="errorlongitude"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('longitude')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk longitude menjadi is-invalid
                                        document.getElementById('longitude').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errorlongitude').innerHTML = "<?= $validation->getError('longitude'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di longitude maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk longitude menjadi is-valid
                                        document.getElementById('longitude').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errorlongitude').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="latitude" class="col-sm-2 col-form-label">latitude</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $longitude ?>" placeholder="Masukkan latitude, cth : 2" pattern="[0-9_.-]+">
                            <div class="invalid-feedback" id="errorlatitude"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('latitude')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk latitude menjadi is-invalid
                                        document.getElementById('latitude').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errorlatitude').innerHTML = "<?= $validation->getError('latitude'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di latitude maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk latitude menjadi is-valid
                                        document.getElementById('latitude').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errorlatitude').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="mb-3 row alig d-flex justify-content-center">
                        <div class="col-4 d-flex justify-content-around">
                            <div class="col-1">
                                <input class="btn btn-primary px-5" type="submit" value="Input">
                            </div>
                            <div class="col-1">
                                <a href="<?= base_url("Lokasi/index") ?>">
                                    <input class="btn btn-secondary px-5" type="button" value="Batal">
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endsection('konten'); ?>