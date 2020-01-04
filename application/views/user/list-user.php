<?php echo $this->load->view('includes/include_form', '', TRUE); ?>

<div class="d-flex justify-content-between my-5">
	<h2>Users List</h2>
	<a href="<?= site_url('helpers/form') ?>" class="btn btn-primary">Back to Form</a>
</div>
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Phone</th>
			<th scope="col">Salary</th>
		</tr>
	</thead>
	<tbody>
		<?php if (count($users) > 0): ?>
			<?php foreach($users as $index => $user): ?>
				<tr>
					<th scope="row"><?= $user['id'] ?></th>
					<td><?= $user['name'] ?></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['phone'] ?></td>
					<td><?= $user['salary'] ?></td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url() ?>assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>
