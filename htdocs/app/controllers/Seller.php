<?php
namespace app\controllers;

class Seller extends \app\core\Controller{

	//#[\app\filters\Login]
	//#[\app\filters\Seller]
	public function index(){
		$seller = new \app\models\Seller();
		$sellers = $seller->get($_SESSION['seller_id']);
		$this->view('Seller/index', ['seller'=>$sellers]);
	}
	
	public function listings(){
		$item = new \app\models\Item();
		$items = $item->getForSeller($_SESSION['seller_id']);
		$this->view('Seller/listings', $items);
	}

	public function stats(){
		$item = new \app\models\Item();
		$items = $item->getForSeller($_SESSION['seller_id']);
		$this->view('Seller/stats', $items);
	}

	public function add(){
		if(isset($_POST['action'])){
			//if(isset($_POST['action']) && $item->seller_id == $_SESSION['seller_id']){
			$item = new \app\models\Item();
			$item->item_name = $_POST['item_name'];
			$item->item_price = $_POST['item_price'];
			$item->item_description = $_POST['item_description'];
			$filename = $this->saveFile($_FILES['item_image']);
			$item->item_image = $filename;
			
			// $item->insert();
			$item->user_id = $_SESSION['user_id'];
			$item->seller_id = $_SESSION['seller_id'];
			$_SESSION['item_id'] = $item->insert();
			header('location:/Seller/listings');
		}else{
			$this->view('Seller/add');
		}
	}

	public function delete($item_id){
		$item = new \app\models\Item();
		$item = $item->get($item_id);
		unlink("images/$item->item_image");
		$item->delete();
		//$this->view('Seller/delete');
	    header('location:/Seller/listings');
	}

		//#[\app\filters\Login]
	public function editProfile(){
		$seller = new \app\models\Seller();
		$seller = $seller->get($_SESSION['seller_id']);
		if(isset($_POST['action'])){
			$seller->seller_fname = $_POST['seller_fname'];
			$seller->seller_lname = $_POST['seller_lname'];
			$seller->seller_email = $_POST['seller_email'];
			$seller->update();
			header('location:/Seller/index');
		}else{
			$this->view('Seller/editProfile');
		}

	}

	#[\app\filters\Login]
	public function createProfile(){
		if(isset($_POST['action'])){
			$seller = new \app\models\Seller();
		    $seller->seller_fname = $_POST['seller_fname'];
			$seller->seller_lname = $_POST['seller_lname'];
			$seller->seller_email = $_POST['seller_email'];
			$seller->user_id = $_SESSION['user_id'];
			$_SESSION['seller_id'] = $seller->insert();
			header('location:/Seller/index');
		}else{
			$this->view('Seller/createProfile');
		}

	}
}