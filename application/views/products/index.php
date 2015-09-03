<?php var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>




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
    <td><a href="products/show/<?= $product['id']?>"><?= $product['title'] ?></a></td>
    <td><?= $product['title'] ?></td>
    <td><?= $product['description'] ?></td>
    <td>$ <?= $product['price'] ?></td>
    <td>
      <!-- Products Action Dropdown button -->
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="products/edit/<?= $product['id']?>"><button class='btn btn-info'>edit</button></a></li>
        <li><a href="products/destroy/<?= $product['id']?>"><button class='btn btn-danger'>destroy</button></a></li>  
      </ul>
    </div>
    </td>
    <td><a href="/carts/add/<?= $product['id']?>"><button class='btn btn-warning'>Add to Cart</button></a></td>
  </tr>
  <?php } ?>
</table>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

  <a href="/products/create"><button class='pull-left btn btn-primary'> Add a new Product</button></a>
</div>

<!-- Footer -->
<?php $this->load->view('/templates/footer') ?>