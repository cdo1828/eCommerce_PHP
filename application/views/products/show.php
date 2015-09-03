<?php var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>

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


		<!-- Footer -->
<?php $this->load->view('/templates/footer') ?>
