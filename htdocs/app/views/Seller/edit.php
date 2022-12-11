<html>
<head>

<title><?=_("Edit Seller Item")?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
body{
background: rgb(2,0,36);
background: linear-gradient(45deg, rgba(2,0,36,1) 0%, rgba(1,57,95,1) 30%, rgba(0,212,255,1) 100%);
}  
</style>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/Seller/edit"><?=_("ShopMart")?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Seller/profile"><?=_("Profile")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Seller/listings"><?=_("Listing")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/logout"><?=_("Logout")?></a>
      </li>
        <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown"><?= _("Language")?></a>
                        <div class="dropdown-menu">
                          <a href="?lang=en_CA" class="dropdown-item">English</a>
                         <a href="?lang=fr_CA" class="dropdown-item">Français</a>
                      </div>
                    </div>  
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

<h2 class="text-center mb-5"><?=_("Edit Item")?></h2>

<form action='' method='post' enctype='multipart/form-data'>
<div class="form-outline mb-4">
<label class="form-label"><?=_("Name")?></label>
<input type="text" name="item_name" value="<?= $data['item']->item_name ?>">
</div>

<div class="form-outline mb-4">
<label<?=_(">Price")?></label>
 <input type="text" type="text" name="item_price" value="<?= $data['item']->item_price ?>">
</div>

<div class="form-outline mb-4">
<label><?=_("Description")?></label>
<textarea class="form-control" rows="3" name="item_description" ><?= $data['item']->item_description ?></textarea>
</div>

<div class="form-outline mb-4">
<label class="form-label"><?=_("Select Picture")?>
<input type="file" name="item_image" id="item_image"class="form-control form-control-lg"/></label>
<img id='item_image_preview' src='/images/<?= $data['item']->item_image ?>' value="<?= $data['item']->item_image ?>" style="max-width:200px;max-height:200px" id="item_image_preview" />
</div>

<div class="d-flex justify-content-center">
<button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4" name="action"><?=_("Edit")?></button>
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