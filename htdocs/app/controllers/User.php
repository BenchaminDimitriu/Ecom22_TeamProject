<?php
namespace app\controllers;

class User extends \app\core\Controller{

	public function index(){//login page
		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);
			if(password_verify($_POST['password'], $user->password_hash)){
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['username'] = $user->username;
				$_SESSION['role'] = $user->role;
				$_SESSION['secret_key'] = $user->secret_key;
				header('location:/User/account');
			}else{
				header('location:/User/index?error=Wrong username/password combination!');
			}
		}else{
			$this->view('User/index');
		}
	}

	public function check2fa(){
		if(!isset($_SESSION['user_id'])) header('location/User/index');

		if(isset($_POST['action'])){
			$currentcode = $_POST['currentcode'];
		 if(\app\core\TokenAuth6238::verify(
		 	$_SESSION['secret_key'],$currentcode)){
		 	$_SESSION['secret_key'] = null;
		 	header('location:/User/account');
		 }
		}else{
			$this->view('User/check2fa');
		}
	}

	#[\app\filters\Login]
	public function account(){
		//password modification
		if(isset($_POST['action'])){
			//check the old password
			$user = new \app\models\User();
			$user = $user->get($_SESSION['username']);
			if(password_verify($_POST['old_password'],$user->password_hash)){
				if($_POST['password'] == $_POST['password_confirm']){
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$user->updatePassword();
					header('location:/User/account?message=Password changed successfully.');
				}else{
					header('location:/User/account?error=Passwords do not match.');
				}
			}else{
				header('location:/User/account?error=Wrong old password provided.');
			}
		}else{
			$this->view('User/account');
		}
	}

	public function logout(){
		session_destroy();
		header('location:/User/index');
	}

	public function register(){
		if(isset($_POST['action'])){//form submitted

			if($_POST['password'] == $_POST['password_confirm']){//match
				$user = new \app\models\User();//TODO
				$check = $user->get($_POST['username']);
				if(!$check){
					$user->username = $_POST['username'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$user->insert();
					header('location:/User/index');
				}else{
					header('location:/User/register?error=The username "'.$_POST['username'].'" is already in use. Select another.');
				}
			}else{
				header('location:/User/register?error=Passwords do not match.');
			}

		}else{
			$this->view('User/register');
		}

	}

	#[\app\filters\Admin]
	public function admin(){
		echo "Yay!";
	}
	// Use: /Default/makeQRCode?data=protocol://address
	//http://localhost/User/makeQRCode?data=ABC
	// data encode data you provide it
	public function makeQRCode(){
		$data = $_GET['data'];
		\QRcode::png($data);
	}

	#[\app\filters\Login]
	public function setup2fa(){
		 if(isset($_POST['action'])){
		 	$currentcode = $_POST['currentCode'];
		 if(\app\core\TokenAuth6238::verify(
		 	$_SESSION['secretkey'],$currentcode)){
		//the user has verified their proper 2-factor authentication setup
			 $user = new \app\models\User();
			 $user->user_id = $_SESSION['user_id'];
			 $user->secret_key = $_SESSION['secretkey'];
			 $user->update2fa();
		 	 header('location:/User/account');
		 }else{
		     header('location:/User/setup2fa?error=token not verified!');//reload
		 	}
		 }else{
			 $secretkey = \app\core\TokenAuth6238::generateRandomClue();
			 $_SESSION['secretkey'] = $secretkey;
			 $url = \App\core\TokenAuth6238::getLocalCodeUrl($_SESSION['username'],
			 'Awesome.com', $secretkey,'Awesome App');
			 $this->view('User/twofasetup', $url);
		 }
	}
}