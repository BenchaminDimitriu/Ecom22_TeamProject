<html>
<head>
  <title><?= _("Checkout")?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  body{
    background-color: steelblue;
  }
</style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/Buyer/checkout"><?=_("ShopMart")?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
       <a class="nav-link" href="http://localhost/Main/catalogue"><?=_("Catalog")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/profile"><?=_("Profile")?></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/messageboard"><?=_("Message Board")?></a>
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
    </ul>
  </div>
</nav>

</br>
</br>
    </header>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">Checkout</h2>
              <h4 style="text-align: right;"><?= _("Total Price")?>: <?php echo $data ?>$</h4>
                <form action='' enctype="multipart/form-data" method='post'>
                <h4><?= _("Shipping Methods")?></h4>
                <div class="form-outline mb-4">
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="shipping" value="free">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Free Shipping (1-3 business days)
                    </label>
                  </div>
                </div>

                <hr>
                <h4><?= _("Address")?></h4>
                <div class="form-outline mb-4">
                  <label for="name"><i class="fa fa-user"></i> <?= _("Full Name")?>:</label>
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Norah Wilkinson">
                </div>

                 <div class="form-outline mb-4">
                  <label for="email"><i class="fa fa-envelope"></i> <?= _("Email")?>:</label>
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="norah123@gmail.com"/>
                </div>

              <div class="form-outline mb-4">
                  <label for="address"><i class="fa fa-address-card-o"></i> <?= _("Address")?>: </label>
                  <input type="text" name="address" class="form-control form-control-lg" placeholder="4089 Chapmans Lane">
                </div>

              <div class="form-outline mb-4">
                  <label for="phone"><i class="fa fa-address-book-o"></i> <?= _("Phone Number")?>: </label>
                  <input type="tel" name="phone" class="form-control form-control-lg" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"><br><br>
                                <hr>

              </div>

              <h4>Payment Methods</h4>
              <div class="form-outline mb-4">
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy; font-size: 36px;"></i>
                    <i class="fa fa-cc-amex" style="color:blue; font-size: 36px;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red; font-size: 36px;"></i>
                    <i class="fa fa-cc-discover" style="color:orange; font-size: 36px;"></i>
                    <i class="fa fa-cc-paypal" style="color:blue; font-size: 36px;"></i>
                  </div>
              </div>

              <div class="form-outline mb-4">
                <label for="cardHolder"><?= _("Card holder")?></label>
                <input type="text" name="cardHolder" class="form-control form-control-lg" placeholder="Norah Wilkinson">
              </div>

              <div class="form-outline mb-4">
                <label for="ccnum"><?= _("Credit card number")?></label>
                <input type="text" name="cardnumber" class="form-control form-control-lg" placeholder="1111222233334444">
              </div>

              <div class="form-outline mb-4">
                <label for="expdate"><?= _("Expire date")?></label>
                <input type="month" name="expdate" class="form-control form-control-lg">
              </div>

              <div class="form-outline mb-4">
                <label for="cvv"><?= _("CVV")?></label>
                <input type="number" name="cvv"class="form-control form-control-lg" placeholder="897" min="000" max="999">
              </div>

              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-dark btn-block btn-lg gradient-custom-4" name="action"><?= _("Place Order")?></button>
              </div>
                
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

