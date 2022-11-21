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

	public function getForCart($item_id){
		$SQL = "SELECT * FROM cart LEFT JOIN item ON cart.item_id = item.item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}

	public function create(){
		$SQL = "INSERT INTO cart(order_id, item_id, qty, price) VALUES (:order_id, :item_id, :qty, :price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_id'=>$this->order_id,
						'item_id'=>$this->item_id,
						'qty'=>$this->qty,
						'price'=>$this->price]);
		return self::$_connection->lastInsertId();
	}


	public function update(){
		$SQL = "UPDATE cart SET qty=:qty, price=:price WHERE cart_id = :cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'price'=>$this->price,
						'cart_id'=>$this->cart_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$this->cart_id]);
	}
}