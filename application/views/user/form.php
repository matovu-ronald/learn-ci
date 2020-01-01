<?php echo $this->load->view('includes/include_form', '', TRUE); ?>

<!-- <h4>Form without form helper</h4>
<form action="" method="post" class="" id="" enctype="multipart/form-data">
	<input type="text" placeholder="Name">
	<input type="email" name="" id="" placeholder="Email">
	<button type="submit">Submit</button>
</form> -->

	<h4>Form with form helper</h4>
	<?= validation_errors() ?>
	<?php echo form_open(site_url("helpers/form-submit")); ?>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Name" name="name">
			<?= form_error("name", "<div class='text-danger'>", "</div>") ?>
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Phone" name="phone">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Salary" name="salary">
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>

	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url() ?>assets/js/jquery-3.4.1.slim.min.js"></script>
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>
