<html>
<head>
	<title>Register</title>
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
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action='' method='post'>
                <div class="form-outline mb-4">
                  <input type="text" id="inputUsername" class="form-control form-control-lg" name="username" required/>
                  <label class="form-label" for="inputUsername">Username</label>
                </div>

               
         <!--          <label for="role">Role:</label>
                   <select name="role" id="role">
                      <option value="buyer">Buyer</option>
                      <option value="seller">Seller</option>
                    </optgroup>
                  </select>
                 -->

                 <div class="input-group form-group">
                    <label class="radio">Buyer
                      <input type="radio" checked="checked" name="role" value="Buyer" />
                      <span class="radiocheckmark"></span>
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="radio">Seller
                      <input type="radio" name="role" value="Seller" />
                      <span class="radiocheckmark"></span>
                    </label>
                </div>
              </br>

                <div class="form-outline mb-4">
                  <input type="password" id="inputPassword" class="form-control form-control-lg" name="password" required/>
                  <label class="form-label" for="inputPassword">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password_confirm" class="form-control form-control-lg" name="password_confirm"/>
                  <label class="form-label" for="password_confirm">Password Confirmation</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Already a user? <a href="/Login/index"
                    class="fw-bold text-body"><u>Login here</u></a></p>
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