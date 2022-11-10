<html>
<head>
	<title>Edit Buyer Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
	<?=$_GET['error']?>
</div>
<?php
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">AucBay</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Main/home">Home <span class="sr-only"></span></a>
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
  </div>
</nav>
              

<div class="bg-image"style="background-image: url('../../images/listing.png');">

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Edit Profile</h2>

              <form action='' method='post'>
                <div class="form-outline mb-4">
                  <input type="text" id="inputFname" class="form-control form-control-lg" name="buyer_fname" required/>
                  <label class="form-label" for="inputFname">First Name</label>
                </div>


              <form action='' method='post'>
                <div class="form-outline mb-4">
                  <input type="text" id="inputLname" class="form-control form-control-lg" name="buyer_lname" required/>
                  <label class="form-label" for="inputLname">Last Name</label>
                </div>


              <form action='' method='post'>
                <div class="form-outline mb-4">
                  <input type="text" id="inputEmail" class="form-control form-control-lg" name="buyer_email" required/>
                  <label class="form-label" for="inputEmail">Email</label>
                </div>
                
                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Edit Profile</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>