<?php echo $this->load->view('includes/include_form', '', TRUE); ?>

<!-- <h4>Form without form helper</h4>
<form action="" method="post" class="" id="" enctype="multipart/form-data">
	<input type="text" placeholder="Name">
	<input type="email" name="" id="" placeholder="Email">
	<button type="submit">Submit</button>
</form> -->
	<div class="d-flex justify-content-between my-5">
		<h4>User Form</h4>
		<a href="<?= site_url('users/list') ?>" class="btn btn-primary">Users List</a>
	</div>
	<?php if ($this->session->flashdata("success")) {
		echo '<div class="alert alert-success">';
			echo $this->session->flashdata("success");
		echo "</div>";
	} ?>
	<?php // echo validation_errors() ?>
	<?php echo form_open(site_url("helpers/form-submit")); ?>
		<div class="form-group">
			<input type="text" value="<?= set_value('name') ?>" class="form-control" placeholder="Name" name="name">
			<?= form_error("name", "<div class='text-danger'>", "</div>") ?>
		</div>
		<div class="form-group">
			<input type="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email" name="email">
			<?= form_error("email", "<div class='text-danger'>", "</div>") ?>
		</div>
		<div class="form-group">
			<input type="text" value="<?= set_value('phone') ?>" class="form-control" placeholder="Phone" name="phone">
			<?= form_error("phone", "<div class='text-danger'>", "</div>") ?>
		</div>
		<div class="form-group">
			<input type="text" value="<?= set_value('salary') ?>" class="form-control" placeholder="Salary" name="salary">
			<?= form_error("salary", "<div class='text-danger'>", "</div>") ?>
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
