<section class="content">
<div class="row">
<?php 
	if($this->session->flashdata('pesan_hapus') ==  true){
		if($_SESSION['pesan_hapus'] == 1){
		echo '<div class="alert alert-success" role="alert"> Hapus data berhasil</div>';
		}else{
		echo '<div class="alert alert-danger" role="alert"> Hapus data gagal</div>';
		}
	}
?>
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
				<h3 class="box-title">Daftar Buku</h3>
				</div>
		
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
							<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Pengarang</th>
								<th>Tahun Terbit</th>
								<th>Kategori</th>
								<th>Aksi</th>							
							</tr>
			
						</thead>
						<tbody>
							<?php
								foreach ($show as $key => $data)
								{
									?>
								<tr>
									<td><?=$key+1;?></td>
									<td><?=$data->judul_buku;?></td>
									<td><?=$data->pengarang;?></td>
									<td><?=$data->thn_terbit;?></td>
									<td><?=$data->nama_kategori;?></td>
									<td>
										
										<a href="<?=site_url('buku/delete/' .$data->id_buku);?> " class="btn btn-xs btn-danger" role="button" onClick="return confirm('Yakin ingin dihapus?');">Hapus</a>
									</td>				
								</tr>
							<?php
								}
							?>
						</tbody>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Pengarang</th>
								<th>Tahun Terbit</th>
								<th>Kategori</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>