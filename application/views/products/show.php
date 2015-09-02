<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <title> Show | Products </title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		
		<a class='btn btn-link' href="/products">back</a>
		<hr>
			<?php
			foreach ($products as $product) {
			?>
		<h1>Product ID #<?= $product['id'] ?></h1>
			<div class='form-group'>
				<label>Name: </label>
				<?= $product['title'] ?>
			</div>
			<div class='form-group'>
				<label>Description: </label>
				<?= $product['description'] ?>
			</div>
			<div class='form-group'>
				<label>Price: </label>
				<?= $product['price'] ?>
			</div>
			<?php } ?>

		</div>

</body>
</html>

