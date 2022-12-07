<?php
namespace app\controllers;

class Login extends \app\core\Controller{

	public function home(){
		if(isset($_POST['action'])){
			$user = new \app\models\Login();
			$user = $user->get($_POST['username']);
			if(password_verify($_POST['password'], $user->password_hash)){
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['username'] = $user->username;
				$_SESSION['role'] = $user->role;
				$_SESSION['secret_key'] = $user->secret_key;
				$seller = $user->getSeller();
				$buyer = $user->getBuyer();
				$_SESSION['buyer_id'] = $buyer->buyer_id;
				$_SESSION['seller_id'] = $seller->seller_id;
				header('location:/Login/account');
			}else{
				/*how to localise that?*/
				header('location:/Login/index?error=Wrong username/password combination!');
			}
		}else{
			$this->view('Login/index');
		}
	}


	public function check2fa(){
		if(!isset($_SESSION['user_id'])) header('location/Login/index');

		if(isset($_POST['action'])){
			$currentcode = $_POST['currentcode'];
		 if(\app\core\TokenAuth6238::verify(
		 	$_SESSION['secret_key'],$currentcode) && $_SESSION['role'] == 'buyer'){
		 	$_SESSION['secret_key'] = null;
		 	header('location:/Login/homeBuyer');
		 }
		 if(\app\core\TokenAuth6238::verify(
		 	$_SESSION['secret_key'],$currentcode) && $_SESSION['role'] == 'seller'){
		 	$_SESSION['secret_key'] = null;
		 	header('location:/Login/homeSeller');
		 }
		}else{
			$this->view('Login/check2fa');
		}
	}

	public function account(){
		$user = new \app\models\Login();
		$users = $user->get($_SESSION['username']);
		$this->view('Login/account' , ['user'=>$users]);
	}

	public function logout(){
		session_destroy();
		header('location:/Main/home');
	}

	public function register(){
		if(isset($_POST['action'])){//form submitted

			if($_POST['password'] == $_POST['password_confirm']){//match
				$user = new \app\models\Login();//TODO
				$check = $user->get($_POST['username']);
				if(!$check){
					$user->username = $_POST['username'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$user->role = $_POST['role'];
					$user->insert();
					header('location:/Login/index');
				}else{
					/*this aswell */
					header('location:/Login/register?error=The username "'.$_POST['username'].'" is already in use. Select another.');
				}
			}else{ 
				/*that too*/
				header('location:/Login/register?error=Passwords do not match.');
			}

		}else{
			$this->view('Login/register');
		}

	}

	public function makeQRCode(){
		$data = $_GET['data'];
		\QRcode::png($data);
	}

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function homeBuyer(){
		$this->view('Login/homeBuyer');
	}

	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function homeSeller(){
		$this->view('Login/homeSeller');
	}

	#[\app\filters\Login]
	public function setup2fa(){
		 if(isset($_POST['action'])){

		 	$currentcode = $_POST['currentCode'];

		 if(\app\core\TokenAuth6238::verify(
		 	$_SESSION['secretkey'],$currentcode) && $_SESSION['role'] == 'buyer'){
			 $user = new \app\models\Login();
			 $user->user_id = $_SESSION['user_id'];
			 $user->secret_key = $_SESSION['secretkey'];
			 $user->update2fa();
		 	 header('location:/Buyer/createProfile');
		 }
		 elseif(\app\core\TokenAuth6238::verify(
		 	$_SESSION['secretkey'],$currentcode) && $_SESSION['role'] == 'seller'){
			 $user = new \app\models\Login();
			 $user->user_id = $_SESSION['user_id'];
			 $user->secret_key = $_SESSION['secretkey'];
			 $user->update2fa();
		 	 header('location:/Seller/createProfile');
		 	}else{
		     header('location:/Login/setup2fa?error=token not verified!');//reload
		 	}
		 }else{
			 $secretkey = \app\core\TokenAuth6238::generateRandomClue();
			 $_SESSION['secretkey'] = $secretkey;
			 $url = \App\core\TokenAuth6238::getLocalCodeUrl($_SESSION['username'],
			 'Awesome.com', $secretkey,'Awesome App');
			 $this->view('Login/twofasetup', $url);
		 }
	}
}