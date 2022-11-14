<?php
namespace app\controllers;

class Main extends \app\core\Controller{

	public function catalogue(){
		$item = new \app\models\Item();
		$items = $item->getAll();
		// $item = $item->get($_SESSION['user_id']); 
		$this->view('Main/catalogue', $items);
	}

	public function home(){

		$this->view('Main/home');
	}

	public function search(){
		//To find interesting publications, as a person or user, I can search for captions by search terms.
		$item = new \app\models\Item();
		$items = $item->search($_GET['search_term']);
		$this->view('Main/catalogue', $items);
	}

	// public function filter(){
	// 	$item = new \app\models\Item();
	// 	$items = $item->filter($_GET['filter']);
	// 	$this->view('Main/catalogue', $items);
	// }
	// public function buy(){
	// }

	// public function test(){
	// 	phpinfo();
	// }

	// public function test(){
	// 	$this->view('Main/test');
	// }

}