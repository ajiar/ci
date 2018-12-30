<section class="content">
	

	
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box box-header">
					<h3 class="box-title">Edit Kategori</h3>
				</div>
			
				<div class="box-body">
					
					<?php foreach ($satuan_kategori as $edit): ?>
					
					<form action="<?=site_url('kategori/update_kategori');?>" method="post" accept-charset="UTF-8">
						<div class="box-body">
							<div class="form-group">
								<label>ID :</label>
								<input type="hidden" name="update" class="form-control" value="<?php echo $edit->id_kategori; ?>" placeholder="" required="required">
							</div>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Nama Kategori</label>
								<input type="text" name="nama_kategori" class="form-control" value="<?php echo $edit->nama_kategori; ?>" placeholder="" required="required">
							</div>
						</div>
						<div class="box-footer">
							<a href="<?=site_url('kategori');?>">
							<button type="button" class="btn btn-default">
								<i class="fa fa-arrow-circle-left"></i>
								Batal
							</button>
							</a>
							<button type="submit" class="btn btn-primary pull-right">
								<i class="fa fa-send"></i>
								Update
							</button> 
						</div>
					</form>
					
					<?php endforeach ;?>
					
				</div>
			</div>		
		</div>
	</div>
</section>