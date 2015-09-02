<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <title>Index | Categories</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">


</head>
<body>
	<?php var_dump($categories) ?>
	<div class="container">
		<h1>Categories</h1>
		<form action='/categories/add' method='post'>
			<input type='text' name='name'>
			<button class='btn btn-primary' type='submit'> Add Category</button>
		</form>
		<br>
		<table class='table table-bordered'>
			<tr>
				<th>Category Name</th>
				<th>Actions</th>
			</tr>
				<!-- Category loop -->
				<? foreach ($categories as $category) { ?>
			<tr>
				<td><?= $category['name'] ?></td>
				<td>
					<!-- Category action button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Action <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="/categories/edit/<?= $category['id'] ?>"><button class='btn btn-warning'>Edit</button></a></li>
					    <li><a href="/categories/destroy/<?= $category['id'] ?>"><button class='btn btn-danger'>Delete</button></a></li>
					  </ul>
					</div>

				</td>	
			</tr>
				<? } ?> <!-- End -->
		</table>

		<!-- Show DropDown Category -->
		<!-- <select multiple class="form-control">
			<? foreach ($categories as $category) { ?>
				<option value="<?= $category['name'] ?>"><?= $category['name'] ?></option>
			<? } ?>
		</select> -->
	</div>
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js') ?>"></script>
  	<script src="<?php echo base_url('assets/js/lodash.min.js') ?>"></script>
  	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>