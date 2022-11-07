<html>
<head>

<title>Add Seller Item</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
              <a href="Main/index" target="_blank"><strong>AucBay</strong></a>
              <a href="http://localhost/Login/register" target="_blank">Register</a>
              <a href="http://localhost/Login/login" target="_blank" id="login">Login</a>
              <a href="http://localhost/Login/logout" target="_blank" id="logout">Logout</a>

<div class="bg-image"style="background-image: url('../../images/p.png');">

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">Add Item</h2>

                <form action='' enctype="multipart/form-data" method='post'>
                 <div class="form-outline mb-4">



<form action='' method='post' enctype='multipart/form-data'>
	 <div class="form-outline mb-4">
	<label class="form-label">Item Name:<input class="form-control" rows="3" type="text" name="item_name" /></label><br>
</div>

<div class="form-outline mb-4">
	<label>Price:<input class="form-control" rows="3" type="text" name="item_price" /></label><br>
</div>
<div class="form-outline mb-4">
	<label>Description:<textarea class="form-control" rows="3" name='item_description'></textarea></label></br>
</div>

<div class="form-outline mb-4">
	<label>Image:<input class="form-control" rows="3" type="file" name="item_image" id="item_image" /></label>
</br>
</br>
  <img id='item_image_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" /><br>
</div>
	<input type="submit" name="action" value="Add new item" />
</form>

           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
	item_image.onchange = evt => {
  const [file] = item_image.files
  if (file) {
    item_image_preview.src = URL.createObjectURL(file)
  }
}
</script>

</body>
</html>