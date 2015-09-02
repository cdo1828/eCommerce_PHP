<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <title> Cart | Products </title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>
<body>
	<?php var_dump($this->session->userdata['cart_items']) ?>
	<? $cart_items = $this->session->userdata['cart_items'] ?>
	
	<div class="container">
		<h1>Cart</h1>

		<a href="/carts/destroy/<?= $cart_items['id'] ?>"><button class='btn btn-danger'>Remove Items from cart</button></a>
	</div>

</body>
</html>