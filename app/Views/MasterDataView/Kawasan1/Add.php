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
                <form class="row mt-4" action="<?= base_url('Kawasan1/input') ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-3 row">
                        <label for="id_kawasan" class="col-sm-2 col-form-label">ID Kawasan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_kawasan" name="id_kawasan" value="<?= set_value('id_kawasan') ?>" placeholder="Masukkan ID Kawasan, cth: KW001">
                            <div class="invalid-feedback" id="errorid_kawasan"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('id_kawasan')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk id_kawasan menjadi is-invalid
                                        document.getElementById('id_kawasan').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errorid_kawasan').innerHTML = "<?= $validation->getError('id_kawasan'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di id_kawasan maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk id_kawasan menjadi is-valid
                                        document.getElementById('id_kawasan').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errorid_kawasan').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kawasan" class="col-sm-2 col-form-label">Kawasan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kawasan" name="kawasan" value="<?= set_value('kawasan') ?>" placeholder="Masukkan Kawasan, cth: Kantor Yayasan Pendidikan Telkom">
                            <div class="invalid-feedback" id="errorkawasan"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('kawasan')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk kawasan menjadi is-invalid
                                        document.getElementById('kawasan').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errorkawasan').innerHTML = "<?= $validation->getError('kawasan'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di kawasan maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk kawasan menjadi is-valid
                                        document.getElementById('kawasan').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errorkawasan').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="koordx" class="col-sm-2 col-form-label">Koordinat X</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="koordx" name="koordx" value="<?= set_value('koordx') ?>" placeholder="Masukkan Koordinat X, cth: -6.901.634">
                            <div class="invalid-feedback" id="errorkoordx"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('koordx')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk koordx menjadi is-invalid
                                        document.getElementById('koordx').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errorkoordx').innerHTML = "<?= $validation->getError('koordx'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di koordx maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk koordx menjadi is-valid
                                        document.getElementById('koordx').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errorkoordx').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="koordy" class="col-sm-2 col-form-label">Koordinat Y</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="koordy" name="koordy" value="<?= set_value('koordy') ?>" placeholder="Masukkan Koordinat Y, cth: 107.619.369">
                            <div class="invalid-feedback" id="errorkoordy"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('koordy')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk koordy menjadi is-invalid
                                        document.getElementById('koordy').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errorkoordy').innerHTML = "<?= $validation->getError('koordy'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di koordy maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk koordy menjadi is-valid
                                        document.getElementById('koordy').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errorkoordy').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="master_plan" class="col-sm-2 col-form-label">Master Plan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="master_plan" name="master_plan" value="<?= set_value('master_plan') ?>" placeholder="Masukkan Master Plan, cth: Master Plan">
                            <div class="invalid-feedback" id="errormaster_plan"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('master_plan')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk master_plan menjadi is-invalid
                                        document.getElementById('master_plan').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errormaster_plan').innerHTML = "<?= $validation->getError('master_plan'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di master_plan maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk master_plan menjadi is-valid
                                        document.getElementById('master_plan').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errormaster_plan').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="amdal" class="col-sm-2 col-form-label">Amdal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="amdal" name="amdal" value="<?= set_value('amdal') ?>" placeholder="Masukkan Amdal, cth: Amdal">
                            <div class="invalid-feedback" id="erroramdal"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('amdal')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk amdal menjadi is-invalid
                                        document.getElementById('amdal').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('erroramdal').innerHTML = "<?= $validation->getError('amdal'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di amdal maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk amdal menjadi is-valid
                                        document.getElementById('amdal').setAttribute("class", "form-control is-valid");
                                        document.getElementById('erroramdal').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="andalalin" class="col-sm-2 col-form-label">Andalalin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="andalalin" name="andalalin" value="<?= set_value('andalalin') ?>" placeholder="Masukkan Andalalin, cth: Andalalin">
                            <div class="invalid-feedback" id="errorandalalin"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('andalalin')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk andalalin menjadi is-invalid
                                        document.getElementById('andalalin').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errorandalalin').innerHTML = "<?= $validation->getError('andalalin'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di andalalin maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk andalalin menjadi is-valid
                                        document.getElementById('andalalin').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errorandalalin').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="luas" class="col-sm-2 col-form-label">Luas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="luas" name="luas" value="<?= set_value('luas') ?>" placeholder="Masukkan Luas Kawasan, cth: 1000">
                            <div class="invalid-feedback" id="errorluas"></div>

                            <?php
                            // contoh mendapatkan error per komponen
                            if (isset($validation)) {
                                if ($validation->getError('luas')) { ?>
                                    <script>
                                        // modifikasi elemen class input form untuk luas menjadi is-invalid
                                        document.getElementById('luas').setAttribute("class", "form-control is-invalid");
                                        document.getElementById('errorluas').innerHTML = "<?= $validation->getError('luas'); ?>";
                                        // serta tambahkan div class invalid
                                    </script>
                                <?php
                                } else {
                                    // tidak ada error di luas maka nilai is-invalid dihapuskan
                                ?>
                                    <script>
                                        // modifikasi elemen class input form untuk luas menjadi is-valid
                                        document.getElementById('luas').setAttribute("class", "form-control is-valid");
                                        document.getElementById('errorluas').innerHTML = "";
                                        // serta tambahkan div class is valid
                                    </script>
                            <?php
                                }
                            } ?>
                        </div>
                        <div class="col-sm-1">M2</div>
                    </div>
                    <div class="mb-3 row alig d-flex justify-content-center">
                        <div class="col-4 d-flex justify-content-around">
                            <div class="col-1">
                                <input class="btn btn-primary px-5" type="submit" value="Input">
                            </div>
                            <div class="col-1">
                                <a href="<?= base_url("Kawasan1/index") ?>">
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