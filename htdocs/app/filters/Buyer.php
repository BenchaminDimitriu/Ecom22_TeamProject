<?php
namespace app\filters;


#[\Attribute]
class Buyer extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] != 'buyer'){
			/*and this?*/
			header('location:/Main/index?error=You may not access the buyer features.');
			return true;
		}
		return false;
	}
}
?>