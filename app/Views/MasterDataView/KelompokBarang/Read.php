<?= $this->extend("Templates/all"); ?>
<?= $this->section("konten"); ?>
<form action="<?= base_url('KelompokBarang/view_createform') ?>" method="POST">
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
								<li class="breadcrumb-item active" aria-current="page">Kelompok Barang</li>
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
				<h6 class="mb-0 text-uppercase">Data List Kelompok Barang</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>ID Kelompok Barang</th>
										<th>Nama Kelompok Barang</th>
									</tr>
								</thead>
								<tbody>
                                <?php 
                                    // looping hasil pemasok dari database
                                    foreach($datakelompokbarang as $row):
                                ?>
                                        <tr>
                                            <th><?=$row['id_kelompok_barang']?></th>
                                            <td><?=$row['nama_kelompok_barang']?></td>
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
<?= $this->endsection('konten'); ?>
