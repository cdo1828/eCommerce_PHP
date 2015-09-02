<?php var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>
<?php $this->load->view('/templates/navbar') ?>



	<div class="col-md-4 col-md-offset-4">
		<h1>Registration</h1>
		<hr>
	<form action='/users/registration' method='post'>
		<div class="form-group">
			<label>Email</label>
			<input class='form-control'type='email' name='email' placeholder='Your@email'>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input class='form-control' type='text' name='username' placeholder='Username...'>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class='form-control' type='password' name='password' placeholder='Password...'>
		</div>
		<div class="form-group">
			<label>Confirmation Password</label>
			<input class='form-control' type='password' name='confirm_password' placeholder='Re-enter a password'>
		</div>
		<button class='btn btn-primary' type='submit'> Register </button>
	</form>
	</div>

<?php $this->load->view('/templates/footer') ?>