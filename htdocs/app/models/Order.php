<?php
namespace app\models;

class Order extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM order_history";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetchAll();
	}

	public function get($order_id){
		$SQL = "SELECT * FROM order_history WHERE order_id=:order_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_id'=>$order_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO order_history (buyer_id, seller_id, item_id, item_name, item_price) VALUES (:buyer_id, :seller_id, :item_id, :item_name, :item_price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['buyer_id'=>$this->buyer_id,
						'seller_id'=>$this->seller_id,
						'item_id'=>$this->item_id,
						'item_name'=>$this->item_name
						'item_price'=>$this->item_price]);
		return self::$_connection->lastInsertId();
	}

}