w<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <title> Products </title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>
<body>
	<?php var_dump($this->session->userdata('user_session')) ?>
  <?php var_dump($products) ?>
  <?php var_dump($this->session->userdata('cart_items')) ?>

<?php $this->load->view('/partials/navbar') ?>


	<h1>Products index</h1>
<div class="container">
 <h1>Products</h1>

<table class='table table-hover'>
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Actions</th>
    <th> ADD CART</th>
  </tr>
  <?php
    foreach ($products as $product) {
   ?>
  <tr>
    <td><?= $product['title'] ?></td>
    <td><?= $product['description'] ?></td>
    <td>$ <?= $product['price'] ?></td>
    <td>    
      <a href="products/show/<?= $product['id']?>"><button class='btn btn-primary'>show</button></a>
      <a href="products/edit/<?= $product['id']?>"><button class='btn btn-info'>edit</button></a>
      <a href="products/destroy/<?= $product['id']?>"><button class='btn btn-danger'>destroy</button></a>
    </td>
    <td><a href="/carts/add/<?= $product['id']?>"><button class='btn btn-warning'>Add to Cart</button></a></td>
  </tr>
  <?php } ?>
</table>

  <a href="/products/create"><button class='pull-left btn btn-primary'> Add a new Product</button></a>
</div>

</body>
</html>