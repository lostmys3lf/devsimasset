<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>
<!-- Tambahan Alert Jika Sukses DML -->
<?php
// jika session status_dml ada isinya maka tampilkan alert menggunakan sweet alert
if (session()->has("status_dml")) {
?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '<?= session("status_dml"); ?>'
        });
    </script>
<?php
}
?>
<!-- Akhir Alert Jika Sukses DML -->
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Master Data</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="<?= base_url("Home/dashboard") ?>"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Lokasi</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <!-- <div class="btn-group"> -->

                <button type="button" class="btn btn-success" data-bs-toggle="dropdown" aria-expanded="false">Tambah</button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="input">Input Manual</a>
                    </li>
                    <li>
                        <a class="dropdown-item" class='bx bx-cloud-upload mr-1' href="">Input Dari Excel</a>
                    </li>
                </ul>
                <!-- <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span> -->
                <!-- </button> -->
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Data List Lokasi</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id Lokasi</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // looping hasil penghuni dari database
                            foreach ($datalokasi as $row) :
                            ?>
                                <tr>
                                    <td scope="row" style="text-align:left"><?= $row['id_lokasi'] ?></td>
                                    <td style="text-align:left"><?= $row['longitude'] ?></td>
                                    <td style="text-align:left"><?= $row['latitude'] ?></td>
                                    <td>
                                        <a href="<?= base_url('Lokasi/viewData/' . $row['id_lokasi']) ?>" class="btn btn-primary btn-sm">Ubah</a>
                                        <a onclick="deleteConfirm('<?php echo base_url('Lokasi/Delete/' . $row['id_lokasi']) ?>')" href="#" class="btn btn-danger btn-sm" role="button" aria-pressed="true">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            endforeach;

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--end page wrapper -->

        </form>
        <!-- Modal Delete -->
        <script>
            function deleteConfirm(url) {
                var tomboldelete = document.getElementById('btn-delete')
                tomboldelete.setAttribute("href", url); //akan meload kontroller delete

                var pesan = "Data dengan ID <b>"
                var pesan2 = " </b>akan dihapus"
                var n = url.lastIndexOf("/")
                var res = url.substring(n + 1);
                document.getElementById("xid").innerHTML = pesan.concat(res, pesan2);

                var myModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
                    keyboard: false
                });

                myModal.show();

            }
        </script>

        <!-- Logout Delete Confirmation-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                        <a id="btn-tutup" class="btn btn-secondary" data-bs-dismiss="modal">X</a>
                    </div>
                    <div class="modal-body" id="xid"></div>
                    <div class="modal-footer">
                        <a id="btn-batal" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</a>
                        <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Delete -->
        <?= $this->endsection('konten'); ?>