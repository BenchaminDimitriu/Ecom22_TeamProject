<html>
<head>

<title>Buyer Profile</title>

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
        <a class="nav-link" href="http://localhost/Buyer/profile">Profile</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/messageboard">Message Board</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/logout">Logout</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
              
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">My Profile</h2>
            

                <button class='btn btn-warning'> <a class='nav-link' href="/Buyer/editProfile"><center>Edit Profile</center></a></button>
                </br>
                </br>
              
              
                <form action='' enctype="multipart/form-data" method='post'>
                  <div class="form-outline mb-4">
                        
                           <dl>
                  <dt>
                    First name:
                  </dt>
                  <dd>
                    <?= $data['buyer']->buyer_fname ?>
                  </dd>
                  <dt>
                    Last name:
                  </dt>
                  <dd>
                    <?= $data['buyer']->buyer_lname ?>
                  </dd>
                  <dt>
                    Email:
                  </dt>
                  <dd>
                    <?= $data['buyer']->buyer_email ?>
                  </dd>
                </dl>

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