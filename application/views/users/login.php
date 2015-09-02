<?php $this->load->view('/templates/header') ?>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Log in</h3>

			<form action='/users/login' method='post'>
				<div class="form-group">
					<label>Email</label>
					<input class='form-control' type='email' name='email' placeholder='Your@email' >
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class='form-control' type='password' name='password' placeholder='Password...' class="validate">
				</div>
				<button class='btn btn-primary' type='submit'> Log in </button>
			</form>
		</div>
	</div>

<?php $this->load->view('/templates/footer') ?>
