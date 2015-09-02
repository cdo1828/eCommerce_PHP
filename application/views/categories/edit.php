<?php var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>
<?php $this->load->view('/templates/navbar') ?>


	<?php var_dump($categories) ?>
	<h1>category Edit</h1>
	<? foreach ($categories as $category) { ?>
		<form action='/categories/update/' method='post'>
			<input type='hidden' name='id' value='<?= $category['id'] ?>'>
			<input type='text' name='name' value='<?= $category['name'] ?>'>
			<button class='btn btn-primary' type='submit'> Update Category</button>
		</form>
	<? } ?>


	<!-- Footer -->
<?php $this->load->view('/templates/footer') ?>