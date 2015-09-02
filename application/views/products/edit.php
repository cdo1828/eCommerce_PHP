<?php var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>
<?php $this->load->view('/templates/navbar') ?>

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

<!-- Footer -->
<?php $this->load->view('/templates/footer') ?>