<h2>Form Helper</h2>

<!-- <h4>Form without form helper</h4>
<form action="" method="post" class="" id="" enctype="multipart/form-data">
	<input type="text" placeholder="Name">
	<input type="email" name="" id="" placeholder="Email">
	<button type="submit">Submit</button>
</form> -->

<h4>Form with form helper</h4>
<?php
echo form_open("http://localhost:8000/index.php/helpers/form-submit", [
	"method" => "post",
	"class" =>  "form-class",
	"id" => "form-id",
	"enctype" => "multipart/form-data"
]);
?>
	<input type="text" placeholder="Name" name="name">
	<input type="email" placeholder="Email" name="email">
	<input type="text" placeholder="Phone" name="phone">
	<input type="text" placeholder="Salary" name="salary">
	<button type="submit">Submit</button>
<?php echo form_close(); ?>
