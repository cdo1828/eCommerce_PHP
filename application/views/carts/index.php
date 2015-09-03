<?php //var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>
<?php $this->load->view('/templates/navbar') ?>
	
	<?php //var_dump($this->session->userdata['cart_items']) ?>
	<?php //var_dump($cart_items) ?>

	<!-- Calculate the quantity of each item -->
		
	
	<div class="container">
			<form action = "/orders/checkout" method = 'post'>
			<button type = 'submit' class = 'btn btn-primary pull-right'>Checkout</button>
		<h1>Cart</h1>		
		<table class='table table-hover'>
				<tr>
				    <th>Name</th>
				    <th>Description</th>
				    <th>Price</th>
				    <th>Quantity</th>
				    <th>Actions</th>
				</tr>
<?php
if(isset($cart_items)){
foreach($cart_items as $item){
?>

	<tr>
		<td><?= $item['title']?></td>
		<td><?= $item['description']?></td>
		<td><?= $item['price']?></td>
		<td><input type = 'number' min = '1' max = '20' name = '<?= $item['id'] ?>_quantity' style = 'width: 45px;' value = '1'></td>
		<td><a href="/carts/destroy/<?= $item['id'] ?>"><button type = 'button' class='btn btn-danger'>Remove Item from cart</button></a></td>
	</tr>
<?php
}}
?>
			</form>
		</table>
		
	</div>

<!-- Footer -->
<?php $this->load->view('/templates/footer') ?>