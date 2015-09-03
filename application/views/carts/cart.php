<?php var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>
	<?php var_dump($this->session->userdata['cart_items']) ?>
	<? $cart_items = $this->session->userdata['cart_items'] ?>
	
	<div class="container">
		<h1>Cart</h1>

		<a href="/carts/destroy/<?= $cart_items['id'] ?>"><button class='btn btn-danger'>Remove Items from cart</button></a>
	</div>

<!-- Footer -->
<?php $this->load->view('/templates/footer') ?>