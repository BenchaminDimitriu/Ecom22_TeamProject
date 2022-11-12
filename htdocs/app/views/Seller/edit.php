<html>
<head>

<title>Add Seller Item</title>

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
  <a class="navbar-brand" href="#">ShopMart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Main/home">Home <span class="sr-only"></span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Main/catalogue">Catalogue</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Seller/profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Seller/listings">Listing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/login">Login</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/logout">Logout</a>
      </li>
    </div>
      </li>
    </ul>
</nav>
  
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">

<h2 class="text-center mb-5">Edit Item</h2>

<form action='' method='post' enctype='multipart/form-data'>
<div class="form-outline mb-4">
<label class="form-label">Name</label>
<input type="text" name="item_name" value="<?= $data['item']->item_name ?>">
</div>

<div class="form-outline mb-4">
<label>Price</label>
 <input type="text" type="text" name="item_price" value="<?= $data['item']->item_price ?>">
</div>

<div class="form-outline mb-4">
<label>Description</label>
<textarea class="form-control" rows="3" name="item_description" ><?= $data['item']->item_description ?></textarea>
</div>

<div class="form-outline mb-4">
<label class="form-label">Select Picture
<input type="file" name="item_image" id="item_image"class="form-control form-control-lg"/></label>
<img id='item_image_preview' src='/images/<?= $data['item']->item_image ?>' value="<?= $data['item']->item_image ?>" style="max-width:200px;max-height:200px" id="item_image_preview" />
</div>

<div class="d-flex justify-content-center">
<button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Edit</button>
</div>
</form>
<script>
  item_image.onchange = evt => {
  const [file] = item_image.files
  if (file) {
    item_image_preview.src = URL.createObjectURL(file)
  }
}
</script>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>