<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <title>Title Here</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>
<body>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
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

</body>
</html>