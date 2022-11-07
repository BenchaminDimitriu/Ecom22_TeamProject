<html>
<head>

<title>Seller listings</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<style>

</style>

<body>
              <a href="Main/index" target="_blank"><strong>AucBay</strong></a>
              <a href="http://localhost/Login/register" target="_blank">Register</a>
              <a href="http://localhost/Login/login" target="_blank" id="login">Login</a>
              <a href="http://localhost/Login/logout" target="_blank" id="logout">Logout</a>
              
<p><!--display the data as a table-->
<div class="bg-image"style="background-image: url('../../images/p.png');">

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">My Listing</h2>
            
                <a href="/Seller/add"><center>Add a new item</center></a>
                </br>
              
                <form action='' enctype="multipart/form-data" method='post'>
                  <div class="form-outline mb-4">
                    
    <table width="100%" border="1" cellpadding="5" cellspacing="5">
    <tr><th>Seller ID</th><th>Name</th><th>Price</th><th>Description</th><th>Image</th><th>Action</th></tr>
	
	<?php
	$item = new \app\models\Item();
	$items = $item->getAll();
	foreach ($data as $item) {
		echo "<tr>
     <td type=name>$item->seller_id</td>
		<td type=name>$item->item_name</td>
		<td type=name>$item->item_price</td>
		<td type=name>$item->item_description</td>
		<td> <img src='/images/".$item->item_image."'style='max-width:200px;max-height:100px'/></td></td>
		<td type=action>
		<a href='/Seller/delete/$item->item_id'>delete</a>
		</td>
		</tr>";
	}
?>

</table>
</p>
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