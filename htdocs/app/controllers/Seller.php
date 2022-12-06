<?php
namespace app\controllers;

class Seller extends \app\core\Controller{

	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function profile(){
		$seller = new \app\models\Seller();
		$sellers = $seller->get($_SESSION['seller_id']);
		$this->view('Seller/profile', ['seller'=>$sellers]);
	}

	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function createProfile(){
		if(isset($_POST['action'])){
			$seller = new \app\models\Seller();
		    $seller->seller_fname = $_POST['seller_fname'];
			$seller->seller_lname = $_POST['seller_lname'];
			$seller->seller_email = $_POST['seller_email'];
			$seller->user_id = $_SESSION['user_id'];
			$_SESSION['seller_id'] = $seller->insert();
			header('location:/Seller/profile');
		}else{
			$this->view('Seller/createProfile');
		}
	}

	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function editProfile(){
		$seller = new \app\models\Seller();
		$seller = $seller->get($_SESSION['seller_id']);
		if(isset($_POST['action'])){
			$seller->seller_fname = $_POST['seller_fname'];
			$seller->seller_lname = $_POST['seller_lname'];
			$seller->seller_email = $_POST['seller_email'];
			$seller->update();
			header('location:/Seller/profile');
		}else{
			$this->view('Seller/editProfile', $seller);
		}
	}

	
	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function listings(){
		$item = new \app\models\Item();
		$items = $item->getForSeller($_SESSION['seller_id']);
		$this->view('Seller/listings', $items);
	}

	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function add(){
		if(isset($_POST['action'])){
			//if(isset($_POST['action']) && $item->seller_id == $_SESSION['seller_id']){
			$item = new \app\models\Item();
			$item->item_name = $_POST['item_name'];
			$item->item_price = $_POST['item_price'];
			$item->item_description = $_POST['item_description'];
			$filename = $this->saveFile($_FILES['item_image']);
			$item->item_image = $filename;
			
			$item->user_id = $_SESSION['user_id'];
			$item->seller_id = $_SESSION['seller_id'];
			$_SESSION['item_id'] = $item->insert();
			header('location:/Seller/listings');
		}else{
			$this->view('Seller/add');
		}
	}

	#[\app\filters\Seller]
	public function delete($item_id){
		$item = new \app\models\Item();
		$item = $item->get($item_id);
		unlink("images/$item->item_image");
		$item->delete();
		//$this->view('Seller/delete');
	    header('location:/Seller/listings');
	}

	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function edit($item_id){
		$item = new \app\models\Item();
		$item = $item->get($item_id);
		if(isset($_POST['action'])){
			$filename = $this->saveFile($_FILES['item_image']);
			if($filename){
				unlink("images/$item->item_image");
				$item->item_image = $filename;
			}
			$item->item_name = $_POST['item_name'];
			$item->item_price = $_POST['item_price'];
			$item->item_description = $_POST['item_description'];
			$item->user_id = $_SESSION['user_id'];
			$item->seller_id = $_SESSION['seller_id'];
			$item->update();
			//$sellers = $seller->get($item);
			header('location:/Seller/listings');
		}else{
			$items = $item->get($item_id);
			$this->view("Seller/edit",['item'=>$items]);
		}
	}

	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function messageboard(){
		$contact = new \app\models\Contact();
	    $contacts = $contact->getBEmailForContact($_SESSION['seller_id']);
		$this->view('Seller/messageboard' , $contacts);
	}

	
	#[\app\filters\Seller]
	#[\app\filters\Login]
	public function contact($buyer_id){
		$buyer = new \app\models\Buyer();
		$buyers = $buyer->getForContact($buyer_id);
		if(isset($_POST['action'])){
			$contact = new \app\models\Contact();
			$contact->seller_id = $_SESSION['seller_id'];
			$contact->buyer_id = $buyer_id;
		    $contact->title = $_POST['title'];
			$contact->message = $_POST['message'];
			$contact->insert();
		$this->view('Seller/contact',['buyer'=>$buyers]);
		header('location:/Seller/messageboard');
		}else{
			$this->view('Seller/contact',['buyer'=>$buyers]);
		}
	}

	public function myReviews($item_id){
		$item = new \app\models\Item();
		$items = $item->get($item_id);


		$review = new \app\models\Review();
	    $reviews = $review->getForSellerReviews($item_id);
		$this->view('Seller/myReviews' , $reviews);
	}
}