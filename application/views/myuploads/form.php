<?php echo $this->load->view('includes/include_form', '', TRUE); ?>

<div class="d-flex justify-content-between my-5">
	<h2>My Upload Form</h2>
</div>
<form action="<?= site_url('submit-file') ?>" method="post" enctype="multipart/form-data">
	<div class="form-group col-md-4">
		<div class="custom-file">
			<input type="file" class="custom-file-input" name="file_upload" id="customFile">
			<label class="custom-file-label" for="customFile">Choose file to upload</label>
		</div>
	</div>
	<div class="form-group col-md-4">
		<button type="submit" class="btn btn-primary">Upload File</button>
	</div>

</form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url() ?>assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>
