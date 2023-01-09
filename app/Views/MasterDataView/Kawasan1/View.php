<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>
<form action="<?= base_url('Kawasan1/input') ?>" method="POST">

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

                            <li class="breadcrumb-item active" aria-current="page">Kawasan</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <div class="btn-group"> -->

                    <button type="button" class="btn btn-success" data-bs-toggle="dropdown" aria-expanded="false">Tambah</button>
                    <!-- <button type="submit" class="btn btn-success">Tambah</button> -->
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="input">Input Manual</a>
                        </li>
                    </ul>

                    <!-- <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span> -->
                    <!-- </button> -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Data Kawasan</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID Kawasan</th>
                                    <th>Kawasan</th>
                                    <th>KoordX</th>
                                    <th>KoordY</th>
                                    <th>Master Plan</th>
                                    <th>Amdal</th>
                                    <th>Andalalin</th>
                                    <th>Luas(m2)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // looping hasil penghuni dari database
                                foreach ($datakawasan1 as $row) :
                                ?>
                                    <tr>
                                        <td><?= $row['id_kawasan'] ?></td>
                                        <td><?= $row['kawasan'] ?></td>
                                        <th><?= $row['koordx'] ?></th>
                                        <td><?= $row['koordy'] ?></td>
                                        <td><?= $row['master_plan'] ?></td>
                                        <td><?= $row['amdal'] ?></td>
                                        <td><?= $row['andalalin'] ?></td>
                                        <td><?= $row['luas'] ?></td>
                                    </tr>
                                <?php
                                endforeach;

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?= $this->endsection('konten'); ?>