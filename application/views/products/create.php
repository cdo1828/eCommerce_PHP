<?php var_dump($this->session->userdata('user_session')) ?>
<?php $this->load->view('/templates/header') ?>
<?php $this->load->view('/templates/navbar') ?>


    <?php var_dump($this->session->userdata('user_session')) ?>
    <?php $user = $this->session->userdata('user_session');
        echo $user['user_id'];
    ?>
    
    <?php if ($this->session->flashdata('errors')) {
      echo "<div class='alert alert-danger'>{$this->session->flashdata('errors')}</div>";
    } ?>

<div class="container">     
    <a class='btn btn-link' href="/products">back</a>
        <hr>
    <div class="col-md-6 col-md-offset-3">
        <h1>Add Product</h1>
    	<form action='/products/add' method='post'>
            <div class="form-group">
                <input type='hidden' name='user_id' value='<?= $user["user_id"] ?>'>
                <label>Title</label>
                <input class='form-control' type='text' name='title'>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class='form-control' name='description' rows='5'> </textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input class='form-control' type='text' name='price' placeholder='Enter Price $'>
            </div>
            <div class="form-group">
            <label>Categories</label>    
                <select multiple class='form-control' name='category_id'>
                    <? foreach ($categories as $category) { ?>
                        <option value='<?= $category['id']?>'><?= $category['name']?></option>
                    <? } ?>
                </select>
            </div>
            <div class="form-group">
                <button class='btn btn-primary' type='submit'>Add Product</button>
            </div>
        </form>
    </div>
</div>


<!-- Footer -->
<?php $this->load->view('/templates/footer') ?>