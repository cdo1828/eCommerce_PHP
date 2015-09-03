<?php var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>


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
	</div>
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js') ?>"></script>
  	<script src="<?php echo base_url('assets/js/lodash.min.js') ?>"></script>
  	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

<!-- Footer -->
<?php $this->load->view('/templates/footer') ?>