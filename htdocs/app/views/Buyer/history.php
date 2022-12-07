<html>
<head>
  <title>Order History</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  body{
    background-color: steelblue;
  }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/Buyer/history"><?=_("ShopMart")?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
       <a class="nav-link" href="http://localhost/Main/catalogue"><?=_("Catalog")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/profile"><?=_("Profile")?></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/messageboard"><?=_("Message Board")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/logout"><?=_("Logout")?></a>
      </li>
      <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown"><?= _("Language")?></a>
                        <div class="dropdown-menu">
                          <a href="?lang=en_CA" class="dropdown-item">English</a>
                         <a href="?lang=fr_CA" class="dropdown-item">Français</a>
                      </div>
                    </div>  
    </ul>
  </div>
</nav>

</br>
</br>

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">


                <form action='' enctype="multipart/form-data" method='post'>

                  <h2 class='text-center mb-5'>Order History</h2>
                       
                    <br>

                    <h2 class='text-center mb-5'>Paid Items</h2>
                              <div class='form-outline mb-4'>
                                <table width="100%" border="1" cellpadding="5" cellspacing="5">
                                <tr><th>Name</th><th>Image</th><th>Quantity</th><th>Price</th></tr>


                  <?php 
               
                      foreach ($data as $order_history) {
                        if($order_history->status == 'paid'){
                            echo "
                                    <tr>
                                          <td type=name id='prName'>$order_history->item_name</td>
                                          <td> <img src='/images/".$order_history->item_image."'style='max-width:200px;max-height:100px'/></td>
                                          <td type=name>$order_history->qty</td>
                                          <td type=name>$order_history->item_price</td>
                                          </td>
                                          <td type=action>
                                          <button class='btn btn-warning'><a class='nav-link' href='/Buyer/review/$order_history->item_id'>Review Item</a></button>
                                          </td>
                                          </tr>
                                         ";
                           }

                      }

                    ?>
           <!--          </table>
                    <br>

                    <h2 class='text-center mb-5'>Watchlist Items</h2>
                              <div class='form-outline mb-4'>
                                <table width="100%" border="1" cellpadding="5" cellspacing="5">
                                <tr><th>Name</th><th>Image</th><th>Quantity</th><th>Price</th></tr>


                  <?php 

                      foreach ($data as $order_history) {
                        if($order_history->status == 'watchlist'){
                            echo "
                                    <tr>
                                          <td type=name id='prName'>$order_history->item_name</td>
                                          <td> <img src='/images/".$order_history->item_image."'style='max-width:200px;max-height:100px'/></td>
                                          <td type=name>$order_history->qty</td>
                                          <td type=name>$order_history->item_price</td>
                                          </td>
                                          </tr>
                                         ";
                           }

                      }

                    ?>


                  </table>
                </div> -->

                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>