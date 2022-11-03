<?php
namespace app\filters;

#[\Attribute]
class Admin extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] != 'admin'){
			header('location:/User/account?error=You may not access the administration features.');
			return true;
		}
		return false;
	}
}

#[\Attribute]
class Seller extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] != 'seller'){
			header('location:/Main/index?error=You may not access the administration features.');
			return true;
		}
		return false;
	}
}
?>