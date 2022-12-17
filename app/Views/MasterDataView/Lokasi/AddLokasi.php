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
                        <li class="breadcrumb-item active" aria-current="page">Input Lokasi</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Text Inputs</h6>
                <hr />
                <form class="row mt-3" action="<?= base_url('Lokasi/input') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="longitude" class="col-sm-2 col-form-label">longitude</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= set_value('longitude') ?>" placeholder="Masukkan longitude, cth: asdasd">
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
                            <input type="text" class="form-control" id="latitude" name="latitude" value="<?= set_value('latitude') ?>" placeholder="Masukkan latitude, cth : 2" onkeyup="sum();">
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
                    <div class="mb-3 row">
                        <div class="col-sm-5"></div>
                        <input class="col-sm-1 btn btn-success" type="submit" value="Input">
                        <button class="col-sm-1 btn btn-primary" onclick="goBack()">Cancel</button>
                        <div class="col-sm-5"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<?= $this->endsection('konten'); ?>