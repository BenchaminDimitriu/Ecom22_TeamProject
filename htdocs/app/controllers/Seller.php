<?php
namespace app\controllers;

class Seller extends \app\core\Controller{

	#[\app\filters\Login]
	#[\app\filters\Seller]
	public function index(){
		$item = new \app\models\Item();
		//call getAll on that object to get the collection of all items
		$items = $item->getAll();
		//call a view and pass the collection for display
		//$this->view('Vet/index',$owners);
		$this->view('Seller/listings', $items);
	}

	public function stats(){
		$item = new \app\models\Item();
		//call getAll on that object to get the collection of all items
		$items = $item->getAll();
		$this->view('Seller/stats', $items);
	}

	public function add(){
		if(isset($_POST['action'])){
			$item = new \app\models\Item();
			$item->item_name = $_POST['item_name'];
			$item->item_price = $_POST['item_price'];
			$item->item_description = $_POST['item_description'];

			$filename = $this->saveFile($_FILES['item_image']);
			$item->item_image = $filename;
			
			$item->insert();
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
}