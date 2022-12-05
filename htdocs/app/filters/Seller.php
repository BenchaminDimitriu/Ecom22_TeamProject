<?php
namespace app\filters;


#[\Attribute]
class Seller extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] != 'seller'){
			header('location:/Main/index?error=You may not access the seller features.');
			return true;
		}
		return false;
	}
}
?>