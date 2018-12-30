<section class="content">
	
<?php 
	echo $this->session->set_flashdata('pesan_create'); 
?>
	
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
				<h3 class="box-title">Daftar Kategori</h3>
				</div>
		
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama Kategori</th>
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
									<td><?=$data->nama_kategori;?></td>
									
									<td>
										
										
										<a href="<?=site_url('kategori/delete?id=') .$data->id_kategori;?> " class="btn btn-xs btn-danger" role="button" onClick="return confirm('Yakin ingin dihapus?');">Hapus</a>
										
									</td>				
								</tr>
							<?php
								}
							?>
						</tbody>
						<tfoot>
								<th>No</th>
								<th>Nama Kategori</th>
								<th>Aksi</th>
						</tfoot>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>