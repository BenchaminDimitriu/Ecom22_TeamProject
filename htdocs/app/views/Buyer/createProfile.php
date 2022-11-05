<html>
<head>
	<title>Create Buyer Profile</title>
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

<form action='' method='post'>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create a Profile</h2>

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
                    class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Create Profile</button>
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