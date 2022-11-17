<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class Login extends \app\core\AccessFilter{
	public function execute(){
		if(!isset($_SESSION['user_id'])){
			/*how to localise that?*/
			header('location:/Login/index?error=You must be logged in to access this location.');
			return true;
		}elseif ($_SESSION['secret_key']!=null){
			header('location:/Login/check2fa');
			return true;
		}
		return false;
	}
}