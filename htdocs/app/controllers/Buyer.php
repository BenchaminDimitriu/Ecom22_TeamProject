<?php
namespace app\controllers;

class Buyer extends \app\core\Controller{

	public function profile(){
		$buyer = new \app\models\Buyer();	
		$buyers = $buyer->get($_SESSION['buyer_id']);
		$this->view('Buyer/profile', ['buyer'=>$buyers]);
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
			header('location:/Buyer/profile');
		}else{
			$this->view('Buyer/createProfile');
		}

	}

	#[\app\filters\Login]
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

	public function contact($seller_id){
		$seller = new \app\models\Seller();
		$sellers = $seller->getForContact($seller_id);
		if(isset($_POST['action'])){
			$contact = new \app\models\Contact();
			$contact->buyer_id = $_SESSION['buyer_id'];
			$contact->seller_id = $seller_id;
		    $contact->title = $_POST['title'];
			$contact->message = $_POST['message'];
			$contact->insert();
		$this->view('Buyer/contact',['seller'=>$sellers]);
		}else{
			$this->view('Buyer/contact',['seller'=>$sellers]);
		}
	}

	public function messageboard(){
		$contact = new \app\models\Contact();
	    $contacts = $contact->getForBuyer($_SESSION['buyer_id']);
		$this->view('Buyer/messageboard' , $contacts);
	}

	// public function addToCart($item_id){
	// 	$cart = new \app\models\Order();
	// 	$cart = $cart->findUserCart($_SESSION['user_id']);
		
	// 	if($cart==null){
	// 		$cart = new \app\models\Order();
	// 		$cart->user_id = $_SESSION['user_id'];
	// 		$cart->status = 'cart';
	// 		$cart->order_id = $cart->create();

	// 	}
		
	// 	$product = new \app\models\Item();
	// 	$product = $product->get($item_id);

	// 	$newItem = new \app\models\Order_detail();
	// 	$newItem->order_id = $cart->order_id;
	// 	$newItem->item_id = $item_id;
	// 	$newItem->price = $product->item_price;
	// 	$newItem->qty = 1;
	// 	$newItem->create();
	// 	header('location:/Buyer/cart');
	// 	//$this->view('Buyer/cart' , $newItem);
	// }

	// public function cart(){
	// 	$order = new \app\models\Order();
	// 	$orders = $order->getForOD($_SESSION['order_id']);
	// 	$orderD = new \app\models\Order_detail();
	// 	$orderDs = $orderD->getForOrder($_SESSION['order_id']);
	// 	$this->view('Buyer/cart', $orderDs);
	// }

	// public function deleteFromCart($order_detail_id){
	//     $order = new \app\models\Order_detail();
	// 	$order = $order->get($order_detail_id);
	// 	$order->delete();
	// 	header('location:/Buyer/cart');
	// }

	public function addToCart($item_id){
		$cart = new \app\models\Cart();
		$item = new \app\models\Item();
		$item = $item->get($item_id);

		$cartUser = $cart->getCartProduct($_SESSION['user_id'], $item_id);

		if($cartUser){
			$cart->user_id = $_SESSION['user_id'];
			$cart->item_id = $item_id;
			$cart->updateQty();
			$cart->updatePrice();
		}else{
			$cart->user_id = $_SESSION['user_id'];
			$cart->item_id = $item_id;
			$cart->qty = 1;
			$cart->price = $item->item_price;
			$cart->insertIntoCart();
		}
		header('location:/Buyer/cart');
	}

	public function deleteFromCart(){

	}

	public function cart(){
		$cart = new \app\models\Cart();
		$cartUser = $cart->getCart($_SESSION['user_id']);
		$this->view('Buyer/cart', $cartUser);
	}




    // public function checkout(){
    // 	$this->view('Buyer/checkout');
	// }

	// public function watchlist(){
	// 	$this->view('Buyer/watchlist');
	// }

	// public function deleteFromWatchlist(){

	// }


}