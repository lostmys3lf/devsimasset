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
                        <li class="breadcrumb-item active" aria-current="page">Kawasan</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>K01</td>
                                <td>Kantor Yayasan Pendidikan Telkom</td>
                                <td>-6.901.634</td>
                                <td>107.619.369</td>
                            </tr>
                            <tr>
                                <td>K02</td>
                                <td>Kawasan Pendidikan Telkom University Dayeuhkolot</td>
                                <td>-6.973.815</td>
                                <td>107.630.733</td>
                            </tr>
                            <tr>
                                <td>K03</td>
                                <td>Kawasan Pendidikan Telkom University Gerlong</td>
                                <td>-6.870.149</td>
                                <td>107.588.353</td>
                            </tr>
                            <tr>
                                <td>K04</td>
                                <td>Kawasan Pendidikan Telkom Jakarta Jl Daan Mogot</td>
                                <td>-6.155.059</td>
                                <td>106.750.649</td>
                            </tr>
                            <tr>
                                <td>K05</td>
                                <td>Kantor Yayasan Pendidikan Telkom</td>
                                <td>-6.901.634</td>
                                <td>107.619.369</td>
                            <tr>
                                <td>K06</td>
                                <td>Kawasan Pendidikan Telkom University Dayeuhkolot</td>
                                <td>-6.973.815</td>
                                <td>107.630.733</td>
                            </tr>
                            <tr>
                                <td>K07</td>
                                <td>Kawasan Pendidikan Telkom University Gerlong</td>
                                <td>-6.870.149</td>
                                <td>107.588.353</td>
                            </tr>
                            <tr>
                                <td>K08</td>
                                <td>Kawasan Pendidikan Telkom Jakarta Jl Daan Mogot</td>
                                <td>-6.155.059</td>
                                <td>106.750.649</td>
                            </tr>
                            <tr>
                                <td>K09</td>
                                <td>Kantor Yayasan Pendidikan Telkom</td>
                                <td>-6.901.634</td>
                                <td>107.619.369</td>
                            <tr>
                                <td>K10</td>
                                <td>Kawasan Pendidikan Telkom University Dayeuhkolot</td>
                                <td>-6.973.815</td>
                                <td>107.630.733</td>
                            </tr>
                            <tr>
                                <td>K11</td>
                                <td>Kawasan Pendidikan Telkom University Gerlong</td>
                                <td>-6.870.149</td>
                                <td>107.588.353</td>
                            </tr>
                            <tr>
                                <td>K12</td>
                                <td>Kawasan Pendidikan Telkom Jakarta Jl Daan Mogot</td>
                                <td>-6.155.059</td>
                                <td>106.750.649</td>
                            </tr>
                        </tbody>
                    </table>
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