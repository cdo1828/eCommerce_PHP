<style>

</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand fa fa-spinner " href="/">nline Store</a></li></li>
      </ul>        
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<!--         <li><a href="products">products</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/categories">categories</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/carts">Cart</a></li>
        <!-- User/ Loggin  -->
          <? if(empty($this->session->userdata['user_session']['is_logged_in'])) {?>
              <li><a href="/login" data-toggle="modal" data-target=".bs-example-modal-lg">Log in</a></li>
          <? }else{ ?>
              <li><a href="/users/logout">Log out</a></li>
          <? } ?>

          <li>
                <!-- Modal -->
                <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Log in</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

          </li> 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>