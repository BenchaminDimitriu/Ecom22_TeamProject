<?php
namespace app\controllers;

class Buyer extends \app\core\Controller{

	// public function index(){
	// 	$this->view('Main/index');
	// }

		public function index(){
		$buyer = new \app\models\Buyer();
		
		$this->view('Buyer/index', $buyer);
	}

	// public function details($buyer_id){
	// 	$buyer = new \app\models\Buyer();
	// 	$buyer = $buyer->get($buyer_id);
	// 	$this->view('Buyer/details', $buyer);
	// }

	//#[\app\filters\Login]
	public function editProfile(){
		$buyer = new \app\models\Buyer();
		$buyer = $buyer->get($_SESSION['buyer_id']);
		if(isset($_POST['action'])){
			$buyer->buyer_fname = $_POST['buyer_fname'];
			$buyer->buyer_lname = $_POST['buyer_lname'];
			$buyer->buyer_email = $_POST['buyer_email'];
			$buyer->update();
			header('location:/Buyer/index');
		}else{
			$this->view('Buyer/editProfile', $buyer);
		}

	}

	#[\app\filters\Login]
	public function createProfile(){
		if(isset($_POST['action'])){
			$buyer = new \app\models\Buyer();
			$buyer->buyer_fname = $_POST['buyer_fname'];
			$buyer->buyer_lname = $_POST['buyer_lname'];
			$buyer->buyer_email = $_POST['buyer_email'];
			$buyer->user_id = $_SESSION['user_id'];
			$_SESSION['buyer_id'] = $buyer->insert();
			header('location:/Buyer/index');
		}else{
			$this->view('Buyer/createProfile');
		}

	}

}