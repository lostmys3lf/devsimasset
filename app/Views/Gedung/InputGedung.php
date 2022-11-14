<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Input Gedung</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input Gedung</li>
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
                                        <h6 class="mb-0">ID Tanah</h6>
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
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Nama Bangunan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Kawasan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Lembaga</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
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
                                        <h6 class="mb-0">Kota/kabupaten</h6>
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
                                    <div class="col-sm-7 text-secondary">
                                        <!-- <input type="text" class="form-control" /> -->
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
                                <hr>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Status Bangunan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Luas Tanah</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Jumlah Lt.</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Jumlah Ruang</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Luas Bangunan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Luas Lt.</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="text" class="form-control"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Tgl. Perolehan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <input type="date" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Cara Perolehan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <!-- <input type="text" class="form-control" /> -->
                                        <select class="form-select" aria-label="Default select example" id="jabatan" name="jabatan">
                    <option value="#" disabled selected>Pilih Cara Perolehan</option>
                        <option >Pembelian</option>
                        <option >Hibah</option>
                        <option >Sewa</option>
                        
                    </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Nilai Perolehan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <!-- <input type="text" class="form-control" /> -->
                                        <label for="formFileMultiple" class="form-label"></label>
                                    <input class="form-control" type="text" id="formFileMultiple" multiple>
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
                        <div class="row">
                        <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Data Lantai</h4>
                                <hr>
                            <div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>No</th>
										<th>ID Tanah</th>
										<th>ID Gedung</th>
										<th>Nama Gedung</th>
										<th>Alamat</th>
										<th>Provinsi</th>
                                        <th>Kota</th>
										<th>Kecamatan</th>
										<th>Kel/Desa</th>
										<th>Luas (M2)</th>
                                        <th>Jumlah Lantai</th>
										<th>Jumlah Ruangan</th>
                                        <th>Cara Perolehan</th>
                                        <th>Nilai Perolehan Rp.</th>
                                        <th>Nomor</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Mitra Sewa</th>
                                        <th>Nilai Sewa Rp.</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Berakhir</th>
                                        <th>Upload Dokumen</th>
                                        <th>Upload Foto</th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                        <td>1.</td>
										<td>T01</td>
										<td>G01</td>
										<td>Gedung Selaru</td>
										<td>Jl. Telekomunikasi</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
										<td>Bojongsoang</td>
										<td>Terusan Buah Batu</td>
                                        <td>123</td>
										<td>4</td>
										<td>40</td>
                                        <td>Pembelian</td>
										<td>4.000.000.000</td>
										<td>1234</td>
                                        <td>11/11/2022</td>
										<td>ICCCM</td>
										<td>4.500.000.000</td>
                                        <td>15/11/2022</td>
										<td>15/11/2025</td>
										<td>Upload</td>
                                        <td>Upload</td>
                                        
									</tr>
                                    <tbody>
									<tr>
                                        <td>2.</td>
										<td>T02</td>
										<td>G02</td>
										<td>Gedung Bangkit</td>
										<td>Jl. Telekomunikasi</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
										<td>Bojongsoang</td>
										<td>Terusan Buah Batu</td>
                                        <td>123</td>
										<td>3</td>
										<td>30</td>
                                        <td>Pembelian</td>
										<td>3.000.000.000</td>
										<td>123</td>
                                        <td>11/11/2022</td>
										<td>ICCCM</td>
										<td>3.500.000.000</td>
                                        <td>15/11/2022</td>
										<td>15/11/2025</td>
										<td>Upload</td>
                                        <td>Upload</td>
                                        
									</tr>
									</tbody>
							</table>
						</div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Data Ruangan</h4>
                                <hr>
                            <div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>No</th>
										<th>ID Tanah</th>
										<th>ID Gedung</th>
										<th>Nama Gedung</th>
										<th>Alamat</th>
										<th>Provinsi</th>
                                        <th>Kota</th>
										<th>Kecamatan</th>
										<th>Kel/Desa</th>
										<th>Luas (M2)</th>
                                        <th>Jumlah Lantai</th>
										<th>Jumlah Ruangan</th>
                                        <th>Cara Perolehan</th>
                                        <th>Nilai Perolehan Rp.</th>
                                        <th>Nomor</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Mitra Sewa</th>
                                        <th>Nilai Sewa Rp.</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Berakhir</th>
                                        <th>Upload Dokumen</th>
                                        <th>Upload Foto</th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                        <td>1.</td>
										<td>T01</td>
										<td>G01</td>
										<td>Gedung Selaru</td>
										<td>Jl. Telekomunikasi</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
										<td>Bojongsoang</td>
										<td>Terusan Buah Batu</td>
                                        <td>123</td>
										<td>4</td>
										<td>40</td>
                                        <td>Pembelian</td>
										<td>4.000.000.000</td>
										<td>1234</td>
                                        <td>11/11/2022</td>
										<td>ICCCM</td>
										<td>4.500.000.000</td>
                                        <td>15/11/2022</td>
										<td>15/11/2025</td>
										<td>Upload</td>
                                        <td>Upload</td>
                                        
									</tr>
                                    <tbody>
									<tr>
                                        <td>2.</td>
										<td>T02</td>
										<td>G02</td>
										<td>Gedung Bangkit</td>
										<td>Jl. Telekomunikasi</td>
										<td>Jawa Barat</td>
                                        <td>Bandung</td>
										<td>Bojongsoang</td>
										<td>Terusan Buah Batu</td>
                                        <td>123</td>
										<td>3</td>
										<td>30</td>
                                        <td>Pembelian</td>
										<td>3.000.000.000</td>
										<td>123</td>
                                        <td>11/11/2022</td>
										<td>ICCCM</td>
										<td>3.500.000.000</td>
                                        <td>15/11/2022</td>
										<td>15/11/2025</td>
										<td>Upload</td>
                                        <td>Upload</td>
                                        
									</tr>
									
									</tbody>
							</table>
						</div>
                            </div>
                        </div>
                        </div>
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
                    </div>
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