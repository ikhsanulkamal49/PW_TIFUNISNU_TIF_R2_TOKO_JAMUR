<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/topbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>

				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id_barang" value="<?php echo $product->id_barang?>" />

							<div class="form-group">
								<label for="nama_barang">nama_barang*</label>
								<input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>"
								 type="text" name="nama_barang" placeholder="nama_barang" value="<?php echo $product->nama_barang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_barang') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="harga_satuan">harga_satuan</label>
								<input class="form-control <?php echo form_error('harga_satuan') ? 'is-invalid':'' ?>"
								 type="number" name="harga_satuan" min="0" placeholder="harga_satuan" value="<?php echo $product->harga_satuan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga_satuan') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="satuan">satuan</label>
								<input class="form-control <?php echo form_error('satuan') ? 'is-invalid':'' ?>"
								 type="text" name="satuan" min="0" placeholder="satuan" value="<?php echo $product->satuan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('satuan') ?>
								</div>
							</div>

								<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>