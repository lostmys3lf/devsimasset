<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>
<form action="<?= base_url('Gedung/input') ?>" method="POST">
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
								<li class="breadcrumb-item active" aria-current="page">Gedung</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<!-- <div class="btn-group"> -->
                            
							<button type="submit" class="btn btn-success">Tambah</button>
							<!-- <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span> -->
							<!-- </button> -->
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							<!-- </div> -->
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Data List Gedung</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
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

		<!--end page wrapper -->    

</form>
<?= $this->endsection('konten'); ?>
	