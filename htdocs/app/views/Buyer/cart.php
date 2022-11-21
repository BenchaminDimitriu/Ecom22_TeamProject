<html>
<head>

<title><?=_("My Cart")?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
body{
background-color: steelblue;
} 
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
</style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/Main/home"><?=_("ShopMart")?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Main/catalogue"><?=_("Catalogue")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Seller/profile"><?=_("Profile")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/messageboard"><?=_("Message Board")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/logout"><?=_("Logout")?></a>
      </li>
    </div>
    </ul>
</nav>

</br>
</br>
<div class="card w-75">
<div class="card-body">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
<div class="card" style="border-radius: 20px;">
<div class="card-body p-200" style="" >

<h2 class="text-center mb-5"><?=_("My Cart")?></h2>
            
<form action='' enctype="multipart/form-data" method='post'>
<div class="form-outline mb-4">

<!-- <th><?=_("Quantity")?></th> -->
                    
<table width="100%" border="1" cellpadding="5" cellspacing="5">
<tr><th><?=_("Picture")?></th><th><?=_("Name")?></th><th><?=_("Unit Price")?></th><th><?=_("Action")?></th></tr>
	
          	<?php
          	$cart = new \app\models\Cart();
          	$carts = $cart->getAll();
          	foreach ($data as $cart) {
          		echo "<tr>
          		<td> <img src='/images/".$cart->item_image."'style='max-width:200px;max-height:100px'/></td></td>
              <td type=name>$cart->item_name</td>
              <td type=name>$cart->item_price</td>
          		<td type=action>
          		<button class='btn btn-danger'><a class='nav-link' href='/Buyer/deleteFromCart/$cart->item_id'>delete from cart</a></button>
          		</td>
          		</tr>";
          	}
          ?>

</table>
    
                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>