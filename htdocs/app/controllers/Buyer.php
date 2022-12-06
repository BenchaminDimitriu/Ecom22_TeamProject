<?php
namespace app\controllers;

class Buyer extends \app\core\Controller{

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function profile(){
		$buyer = new \app\models\Buyer();	
		$buyers = $buyer->get($_SESSION['buyer_id']);
		$this->view('Buyer/profile', ['buyer'=>$buyers]);
	}
	
	#[\app\filters\Buyer]
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

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function editProfile(){
		$buyer = new \app\models\Buyer();
		$buyer = $buyer->get($_SESSION['buyer_id']);
		if(isset($_POST['action'])){
			$buyer->buyer_fname = $_POST['buyer_fname'];
			$buyer->buyer_lname = $_POST['buyer_lname'];
			$buyer->buyer_email = $_POST['buyer_email'];
			$buyer->update();
			header('location:/Buyer/profile');
		}else{
			$this->view('Buyer/editProfile', $buyer);
		}
	}

	/*----------------------Contact---------------------------------------*/

	#[\app\filters\Buyer]
	#[\app\filters\Login]
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

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function messageboard(){
		// $contact = new \app\models\Contact();
	    // $contacts = $contact->getForBuyer($_SESSION['buyer_id']);
		// $this->view('Buyer/messageboard' , $contacts);

		$contact = new \app\models\Contact();
	    $contacts = $contact->getSEmailForContact($_SESSION['buyer_id']);
		$this->view('Buyer/messageboard' , $contacts);
	}

	/*---------------------------CART--------------------------------------*/

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function cart(){
		$cart = new \app\models\Cart();
		$cartUser = $cart->getCart($_SESSION['user_id']);
		$total_price = 0;
		foreach ($cartUser as $data){
			$total_price += $data->item_price;
		}
		$this->view('Buyer/cart', ['cartUser'=>$cartUser, 'total_price'=>$total_price]);
	}

	#[\app\filters\Buyer]
	#[\app\filters\Login]
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

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function deleteFromCart($item_id){
		$cart = new \app\models\Cart();
		$item = new \app\models\Item();
		$item = $item->get($item_id);

		$cartUser = $cart->getCartProduct($_SESSION['user_id'], $item_id);
		if($cartUser){
			if($cartUser->qty > 1){
				$cart->user_id = $_SESSION['user_id'];
				$cart->item_id = $item_id;
				$cart->removeProduct();
				$cart->updatePrice();
			}else{
			$cart->user_id = $_SESSION['user_id'];
			$cart->item_id = $item_id;
			$cart->deleteProduct();
			}
		}
		header('location:/Buyer/cart');
	}

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function history(){
		$order = new \app\models\Cart();
		$order_history = $order->getByUser($_SESSION['user_id']);
		$this->view('Buyer/history', $order_history);
	}
	

	/*---------------------------WATCHLIST--------------------------------------*/

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function watchlist(){
		$cart = new \app\models\Cart();
		$cartUser = $cart->getWatchlist($_SESSION['user_id']);
		$this->view('Buyer/watchlist', $cartUser);
	}

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function addToWatchlist($item_id){
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
			$cart->insertIntoWatchlist();
		}
		header('location:/Buyer/watchlist');
	}
	
	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function deleteFromWatchlist($item_id){
		$cart = new \app\models\Cart();
		$item = new \app\models\Item();
		$item = $item->get($item_id);

		$cartUser = $cart->getWatchlistItem($_SESSION['user_id'], $item_id);
		if($cartUser){
			$cart->user_id = $_SESSION['user_id'];
			$cart->item_id = $item_id;
			$cart->deleteWItem();
		}
			header('location:/Buyer/watchlist');
	}

/*--------------------CHECKOUT-------------------------*/

	
    public function checkout(){
    	$cartTemp = new \app\models\Cart();
		$cartUser = $cartTemp->getAllItemsUnpaidForUser($_SESSION['user_id']);
		$total_price = 0;
		foreach ($cartUser as $data){
			$total_price += $data->item_price;
		}

		if(isset($_POST['action'])){
			$cart = new \app\models\Cart();
			$cart->updateCartCheckout($_SESSION['user_id']);
			header('location:/Buyer/history');
		}
		$this->view('Buyer/checkout' , $total_price);
	}
/*-------------------Review----------------------------*/

	#[\app\filters\Buyer]
	#[\app\filters\Login]
	public function review($item_id){
		$item = new \app\models\Item();
		$items = $item->get($item_id);

		// $seller = new \app\models\Seller();
		// $sellers = $seller->getForContact();


		if(isset($_POST['action'])){
			$review = new \app\models\Review();
			$review->user_id = $_SESSION['user_id'];
			$review->item_id = $item_id;
			// $review->seller_id = $seller_id;
		    $review->rating = $_POST['rating'];
			$review->comment = $_POST['comment'];
			$review->insert();
		$this->view('Buyer/review',['item'=>$items]);
		}else{
			$this->view('Buyer/review',['item'=>$items]);
		}
	}

	public function myReviews(){
		$review = new \app\models\Review();
	    $reviews = $review->getReviews($_SESSION['user_id']);
		$this->view('Buyer/myReviews' , $reviews);
	}

}

