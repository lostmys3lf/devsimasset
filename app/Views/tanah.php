<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">DataTable Example</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
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
    <?= $this->endsection('konten'); ?>