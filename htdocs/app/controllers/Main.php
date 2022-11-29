<?php
namespace app\controllers;

class Main extends \app\core\Controller{

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function catalogue(){
		$item = new \app\models\Item();
		$items = $item->getAll();
		$item = $item->getForUser($_SESSION['user_id']); 
		$this->view('Main/catalogue', $items);
	}

	public function home(){
		$this->view('Main/home');
	}

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function search(){
		$item = new \app\models\Item();
		$items = $item->search($_GET['search_term']);
		$this->view('Main/catalogue', $items);
	}
}