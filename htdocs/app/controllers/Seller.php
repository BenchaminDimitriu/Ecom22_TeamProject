<?php
namespace app\controllers;

class Seller extends \app\core\Controller{

	public function index(){

		$this->view('Seller/add');
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

	public function delete(){
		$item = new \app\models\Item();
		$item = $item->get($item_id);
		unlink("images/$item->item_image");
		$item->delete();
		//$this->view('Seller/delete');
	}
		header('location:/Seller/listings/');
}