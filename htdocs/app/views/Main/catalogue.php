<html>
<head>

	<title><?= _("Catalog") ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<style>
body{
background: rgb(2,0,36);
background: linear-gradient(45deg, rgba(2,0,36,1) 0%, rgba(1,57,95,1) 30%, rgba(0,212,255,1) 100%);
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
<a class="navbar-brand" href="http://localhost/Main/catalogue"><?=_("ShopMart")?></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">

   <form action="/Main/search" method="get" style='display:inline-block'>         
        <div class="input-group">
        <input type="search" name='search_term' class="form-control" placeholder="Enter search term" />
        <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
       </div>
  </form>

       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/profile"><?=_("Profile")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/messageboard"><?=_("Message Board")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/history"><?=_("Order History")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/myReviews"><?=_("My Reviews")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/watchlist"><?=_("Watchlist")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/cart"><?=_("Cart")?></a>
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
<div class="card w-75">
<div class="card-body">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
<div class="card" style="border-radius: 20px;">
<div class="card-body p-200" style="" >


<h2 class="text-center mb-5"><?=_("Catalog")?></h2>
     
<form action='' enctype="multipart/form-data" method='post'>
<div class="form-outline mb-4">
<table width="100%" border="1" cellpadding="5" cellspacing="5">

<tr><th><?=_("Name")?></th><th><?=_("Description")?></th><th><?=_("Price")?></th><th><?=_("Image")?></th><th><?=_("Action")?></th><th><?=_("Action")?></th><th><?=_("Action")?></th></tr>
                	
                      	<?php
                      	foreach ($data as $items) {
                      		echo "<tr>
                      		<td type=name>$items->item_name</td>
                      		<td type=name>$items->item_description</td>
                          <td type=name>$items->item_price</td>
                      		<td> <img src='/images/".$items->item_image."'style='max-width:200px;max-height:100px'/></td></td>
                          <td type=action>
                          <button class='btn btn-info'><a class='nav-link' href='/Buyer/contact/$items->seller_id'>Contact seller</a></button>
                          </td>
                          <td type=action>
                          <button class='btn btn-secondary'><a class='nav-link' href='/Buyer/addToWatchlist/$items->item_id'>Add to watchlist</a></button>
                          </td>
                      		<td type=action>
                      	  <button class='btn btn-warning'><a class='nav-link' href='/Buyer/addToCart/$items->item_id'>Add to cart</a></button>
                      		</td>
                      		</tr>";
                      	}
                      ?>
                      </table>
                  </div>  
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