<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$item = new \app\models\Item();
		$items = $item->getAll();
		// $item = $item->get($_SESSION['user_id']); 
		$this->view('Main/index', $items);
	}

	// public function buy(){
	// }

	// public function test(){
	// 	phpinfo();
	// }

	// public function test(){
	// 	$this->view('Main/test');
	// }

}