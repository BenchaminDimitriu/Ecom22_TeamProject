<html>

<head>
<title><?=_("2fa set up")?></title>
</head>

<style>
body{
background: rgb(2,0,36);
background: linear-gradient(45deg, rgba(2,0,36,1) 0%, rgba(1,57,95,1) 30%, rgba(0,212,255,1) 100%);
}  
</style>
<body>

 <div class="mask d-flex align-items-center h-100 gradient-custom-3" style="opacity:80%;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">     
                     

	<img src="/Login/makeQRCode?data=<?= $data ?>" />
	<h3 style="color:white;"><?=_("
		Please scan the QR-code on the screen with your favorite
		Authenticator software, such as Google Authenticator. The
		authenticator software will generate codes that are valid for 30
		seconds only. Enter such a code while and submit it while it is
		still valid to confirm that the 2-factor authentication can be
		applied to your account.")?>
	</h3>

	<form method="post" action="">
		<label style="color:white;"><?=_("Current code:")?><input type="text" name="currentCode"
		/></label>
		<input type="submit" name="action" value="Verify code" />	
	</form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>