<?php
namespace app\models;

class Cart extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT cart.*, item.* FROM cart LEFT JOIN item ON cart.item_id = item.item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}

	public function getUserForCart($user_id){
		$SQL = "SELECT * FROM cart WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}


	public function getForCart($item_id){
		$SQL = "SELECT * FROM cart LEFT JOIN item ON cart.item_id = item.item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO cart(user_id, item_id, status, qty, price, payment_id) VALUES (:user_id, :item_id, :status, :qty, :price, :payment_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'item_id'=>$this->item_id,
						'status'=>'cart',
						'qty'=>$this->qty,
						'price'=>$this->price,
						'payment_id'=>$this->payment_id]);
		return self::$_connection->lastInsertId();
	}


	public function updateOrderStatus(){
		$SQL = "UPDATE cart SET status=:status WHERE user_id = :user_id AND status = :initStatus";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'paid',
						'user_id'=>$this->user_id,
						'initStatus'=>$this->initStatus]);
	}

	// public function updateShipStatus(){
	// 	$SQL = "UPDATE cart SET status=:status WHERE user_id = :user_id AND status = :initStatus";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['status'=>'shipped',
	// 					'user_id'=>$this->user_id,
	// 					'initStatus'=>'paid']);
	// }

	public function delete(){
		$SQL = "DELETE FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$this->cart_id]);
	}
}