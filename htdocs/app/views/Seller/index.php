<html>
<head>

<title>Seller Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<style>

</style>

<body>
<p><!--display the data as a table-->
<div class="bg-image"style="background-image: url('../../images/p.png');">

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">My Profile</h2>
            
                <a href="/Buyer/editProfile"><center>Edit Profile</center></a>
                </br>
              
              
                <form action='' enctype="multipart/form-data" method='post'>
                  <div class="form-outline mb-4">
                        
                <dl>
                  <dt>
                    First name:
                  </dt>
                  <dd>
                    <?= $data->seller_fname ?>
                  </dd>
                  <dt>
                    Last name:
                  </dt>
                  <dd>
                    <?= $data->seller_lname ?>
                  </dd>
                  <dt>
                    Email:
                  </dt>
                  <dd>
                    <?= $data->seller_email ?>
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