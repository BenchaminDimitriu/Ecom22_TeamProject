<?php
namespace app\models;

class Cart extends \app\core\Model{

//for order history
	public function getByUser($user_id){
		$SQL = "SELECT * FROM cart WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}

	public function get($cart_id){
		$SQL = "SELECT * FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$cart_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}

	public function getCart(){
		$SQL = "SELECT * FROM cart CROSS JOIN item on cart.item_id=item.item_id WHERE status=:status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'cart']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}

	public function getWatchlist(){
		$SQL = "SELECT * FROM cart CROSS JOIN item on cart.item_id=item.item_id WHERE status=:status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'watchlist']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}


	public function getCartProduct($user_id, $item_id){
		$SQL = "SELECT * FROM cart WHERE user_id=:user_id AND status=:status AND item_id=:item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id,
						'status'=>'cart',
						'item_id'=>$item_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}

	public function getWatchlistItem($user_id, $item_id){
		$SQL = "SELECT * FROM cart WHERE user_id=:user_id AND status=:status AND item_id=:item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id,
						'status'=>'watchlist',
						'item_id'=>$item_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}


	public function insertIntoCart(){
		$SQL = "INSERT INTO cart(user_id, item_id, qty, price, status) VALUES (:user_id, :item_id, :qty, :price, :status)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'item_id'=>$this->item_id,
						'qty'=>$this->qty,
						'price'=>$this->price,
						'status'=>'cart']);
	}

		public function insertIntoWatchlist(){
		$SQL = "INSERT INTO cart(user_id, item_id, qty, price, status) VALUES (:user_id, :item_id, :qty, :price, :status)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'item_id'=>$this->item_id,
						'qty'=>$this->qty,
						'price'=>$this->price,
						'status'=>'watchlist']);
	}

	public function updateOrderStatus(){
		$SQL = "UPDATE cart SET status=:status WHERE user_id = :user_id AND status = :intitStatus";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'paid',
						'user_id'=>$this->user_id,
						'initStatus'=>'cart']);
	}

	public function updateQty(){
		$SQL = "UPDATE cart SET qty=qty+:qty WHERE user_id = :user_id AND status = :status AND item_id = :item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>1,
						'user_id'=>$this->user_id,
						'status'=>'cart',
						'item_id'=>$this->item_id]);
	}

	public function updatePrice(){
		$SQL = "UPDATE cart LEFT JOIN item ON cart.item_id=item.item_id SET price=item_price*qty WHERE cart.user_id = :user_id AND status = :status AND cart.item_id = :item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'status'=>'cart',
						'item_id'=>$this->item_id]);
	}

	public function updateItemStatus(){
		$SQL = "UPDATE cart SET status=:status WHERE item_id = :item_id AND status = :intitStatus";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>$this->status,
						'item_id'=>$this->item_id,
						'initStatus'=>$this->initStatus]);
	}

	public function deleteProduct(){
		$SQL = "DELETE FROM cart WHERE item_id = :item_id AND user_id = :user_id AND status = :status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$this->item_id,
						'user_id'=>$this->user_id,
						'status'=>'cart']);
	}

	public function removeProduct(){
		$SQL = "UPDATE cart SET qty=qty-:qty WHERE user_id = :user_id AND status = :status AND item_id = :item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>1,
						'user_id'=>$this->user_id,
						'status'=>'cart',
						'item_id'=>$this->item_id]);
	}

	public function deleteWItem(){
		$SQL = "DELETE FROM cart WHERE item_id = :item_id AND user_id = :user_id AND status = :status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$this->item_id,
						'user_id'=>$this->user_id,
						'status'=>'watchlist']);
	}
}
