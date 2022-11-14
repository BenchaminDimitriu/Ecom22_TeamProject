<html>
<head>

<title>Contact Seller</title>

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
  <a class="navbar-brand" href="http://localhost/Main/home">ShopMart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Main/catalogue">Catalogue</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Seller/profile">Profile</a>
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

<h2 class="text-center mb-5">Send a message</h2>

<form action='' method='post' enctype='multipart/form-data'>
<div class="form-outline mb-4">
<label class="form-label">Title:<input class="form-control" rows="3" type="text" name="title" /></label><br>
</div>

<div class="form-outline mb-4">
<label>Description:<textarea rows="4" cols="50" maxlength="50" class="form-control form-control-lg" rows="3" name='message'></textarea></label></br>
</div>

<button type="submit"class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Send</button>
</form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>