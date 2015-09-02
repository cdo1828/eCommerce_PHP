<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <title> Edit | Product </title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>
<body>

<div class="container">
  <a class='btn btn-link' href="/products"> back</a>
  <hr>
  <div class="col-md-8">

<?php 
   
    if ($this->session->flashdata('errors')) {
      echo "<div class='alert alert-danger'>{$this->session->flashdata('errors')}</div>";
    } 
  foreach ($products as $product) {
 ?>

<?= var_dump($products)?>

  <form action='/products/update' method='post'>
    <div class="form-group">
        <input type='hidden' name='id' value='<?= $product['id'] ?>'>
        <label>Name: </label>
        <input class='form-control' type='text' name='title' value='<?= $product['title']?>' placeholder='Name of product'>
    </div>
    <div class="form-group">
        <label> Description</label>
        <textarea class='form-control' rows='5' name='description' placeholder='Description...'><?= $product['description']?></textarea>
    </div>
    <div class="form-group">
        <label>Price: </label>
        <input class='form-control' type='text' name='price' value='<?= $product['price']?>' placeholder='Price...'>
    </div>
    <div class="form-group">
        <label>Categories</label>
        <select multiple class='form-control' name='category_id'>
              <? foreach ($categories as $category) { ?>
                <option value='<?= $category['id']?>'><?= $category['name']?></option>
               <? } ?>
        </select>
    </div>  
    <button class='btn btn-success' type='submit'> Update </button>
  </form>
<?php } ?>
</div>
</div>
</body>
</html>
