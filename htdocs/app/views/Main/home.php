<html>
<head>

	<title>Welcome to AucBay</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
.carousel-item:nth-child(1) {
  background-image: url('../../images/welcome.jpeg'); /*for script to change*/
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

#profile{
  margin-left: 10px;
}

#login{
  margin-left: 10px;
}

#logout{
  margin-left: 10px;
}

#pub{
   margin-left: 10px;
}

#post{
  margin-left: 800px;
}

/* Height for devices larger than 576px */
@media (min-width: 992px) {
  #introCarousel {
    margin-top: -58.59px;
  }
}
</style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
      <!-- Navbar brand -->

      <div class="collapse navbar-collapse" id="navbarExample01">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="Main/index" target="_blank"><strong>AucBay</strong></a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="http://localhost/Login/register" target="_blank">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Login/index" target="_blank" id="login">Login</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="/Login/logout" target="_blank" id="logout">Logout</a>
            </li>
          </ul>

         
      </div>
    </div>
  </nav>

  <!-- Carousel wrapper -->
  <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" 
  data-mdb-ride="carousel">

    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
                  <h1 class="mb-3">Welcome to AucBay</h1>
                  <h5 class="mb-4">By Jonathan Dimitriu and Emmy Ea</h5>
            </div>
          </div>
        </div>
      </div>

</body>
</html>