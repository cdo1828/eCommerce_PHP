<html>
<head>
	<title></title>
</head>
<body>
	<?php var_dump($categories) ?>
	<h1>category Edit</h1>
	<? foreach ($categories as $category) { ?>
		<form action='/categories/update/' method='post'>
			<input type='hidden' name='id' value='<?= $category['id'] ?>'>
			<input type='text' name='name' value='<?= $category['name'] ?>'>
			<button class='btn btn-primary' type='submit'> Update Category</button>
		</form>
	<? } ?>
</body>
</html>