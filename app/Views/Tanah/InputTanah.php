<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Input Tanah</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input Tanah</li>
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
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">ID Kawasan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">No. ID Tanah</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Nama Tanah</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Lembaga</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Provinsi</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Kota/Kabupaten</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Kelurahan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Rt</h6>
                                    </div>
                                    <div class="col-sm text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-sm">
                                        <h6 class="mb-0">Rw</h6>
                                    </div>
                                    <div class="col-sm text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Kode Pos</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Status</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <!-- <input type="text" class="form-control" /> -->
                                        <select class="form-select" aria-label="Default select example" id="jabatan" name="jabatan">
                    <option value="#" disabled selected>Pilih Status</option>
                        <option >Aktif</option>
                        <option >Tidak Aktif</option>
                        
                    </select>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-sm-5"></div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Submit" />
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h4>Data Kepemilikan</h4>
                                <hr>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">No. Sertifikat</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Cara Perolehan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Nomor</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Hak</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Tgl. Terbit</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="date" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Tgl. Hak Berakhir</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="date" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Upload Sertifikat</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <!-- <input type="text" class="form-control" /> -->
                                        <label for="formFileMultiple" class="form-label"></label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <!-- <h6 class="mb-0">Tgl. Hak Berakhir</h6> -->
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <!-- <input type="date" class="form-control" /> -->
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <!-- <h6 class="mb-0">Tgl. Hak Berakhir</h6> -->
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <!-- <input type="date" class="form-control" /> -->
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Submit" />
                                    </div>
                                </div>
                                <br><br><br>
                            </div>
                        </div>
                        </div>
                        <hr>
                        <!-- <div class="row"> -->
                        <!-- <div class="col-lg-6"> -->
                        <div class="card">
                            <div class="card-body">
                                <h4>Data Sewa</h4>
                                <hr>
                            <div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>ID Kawasan</th>
										<th>No. ID Tanah</th>
                                        <th>Nama Tanah</th>
										<th>Alamat</th>
										<th>Provinsi</th>
										<th>Kota</th>
                                        <th>Kecamatan</th>
                                        <th>Kel/Desa</th>
                                        <th>Cara Perolehan</th>
                                        <th>Hak</th>
                                        <th>Nomor</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Luas (M2)</th>
                                        <th>Upload Dokumen</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>K01</td>
										<td>T01</td>
										<td>Tanah Telkom University</td>
										<td>Bandung</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
                                        <td>Bojongsoang</td>
                                        <td>Bojongsoang</td>
                                        <td>Pembelian</td>
                                        <td>Sah</td>
                                        <td>12345</td>
                                        <td>01/01/2022</td>
                                        <td>134</td>
                                        <td>123</td>
                                        
									</tr>
                                    <tbody>
									<tr>
										<td>1.</td>
										<td>K01</td>
										<td>T01</td>
										<td>Tanah Telkom University</td>
										<td>Bandung</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
                                        <td>Bojongsoang</td>
                                        <td>Bojongsoang</td>
                                        <td>Pembelian</td>
                                        <td>Sah</td>
                                        <td>12345</td>
                                        <td>01/01/2022</td>
                                        <td>134</td>
                                        <td>123</td>
                                        
									</tr>
                                    <tbody>
									<tr>
										<td>1.</td>
										<td>K01</td>
										<td>T01</td>
										<td>Tanah Telkom University</td>
										<td>Bandung</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
                                        <td>Bojongsoang</td>
                                        <td>Bojongsoang</td>
                                        <td>Pembelian</td>
                                        <td>Sah</td>
                                        <td>12345</td>
                                        <td>01/01/2022</td>
                                        <td>134</td>
                                        <td>123</td>
                                        
									</tr>
									
									</tbody>
							</table>
						</div>
                            </div>
                        <!-- </div> -->
                        </div>
                        
                        <!-- <div class="col-lg-6"> -->
                        <div class="card">
                            <div class="card-body">
                                <h4>Data Sertifikat Tanah</h4>
                                <hr>
                            <div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>ID Kawasan</th>
										<th>No. ID Tanah</th>
                                        <th>Nama Tanah</th>
										<th>Alamat</th>
										<th>Provinsi</th>
										<th>Kota</th>
                                        <th>Kecamatan</th>
                                        <th>Kel/Desa</th>
                                        <th>Cara Perolehan</th>
                                        <th>Hak</th>
                                        <th>Nomor</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Luas (M2)</th>
                                        <th>Upload Dokumen</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>K01</td>
										<td>T01</td>
										<td>Tanah Telkom University</td>
										<td>Bandung</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
                                        <td>Bojongsoang</td>
                                        <td>Bojongsoang</td>
                                        <td>Pembelian</td>
                                        <td>Sah</td>
                                        <td>12345</td>
                                        <td>01/01/2022</td>
                                        <td>134</td>
                                        <td>123</td>
                                        
									</tr>
                                    <tbody>
									<tr>
										<td>1.</td>
										<td>K01</td>
										<td>T01</td>
										<td>Tanah Telkom University</td>
										<td>Bandung</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
                                        <td>Bojongsoang</td>
                                        <td>Bojongsoang</td>
                                        <td>Pembelian</td>
                                        <td>Sah</td>
                                        <td>12345</td>
                                        <td>01/01/2022</td>
                                        <td>134</td>
                                        <td>123</td>
                                        
									</tr>
                                    <tbody>
									<tr>
										<td>1.</td>
										<td>K01</td>
										<td>T01</td>
										<td>Tanah Telkom University</td>
										<td>Bandung</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
                                        <td>Bojongsoang</td>
                                        <td>Bojongsoang</td>
                                        <td>Pembelian</td>
                                        <td>Sah</td>
                                        <td>12345</td>
                                        <td>01/01/2022</td>
                                        <td>134</td>
                                        <td>123</td>
                                        
									</tr>
									
									</tbody>
							</table>
						</div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                
                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                        <p>Web Design</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Website Markup</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>One Page</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Mobile Template</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Backend API</p>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
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