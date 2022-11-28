<?php
namespace app\models;

class Order_detail extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM order_detail";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order_detail');
		return $STMT->fetchAll();
	}

	// public function getForOrder($order_id){
	// 	$SQL = "SELECT order_detail.order_detail_id, item.* FROM order_detail JOIN item ON order_detail.item_id = item.item_id";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute();
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order_detail');
	// 	return $STMT->fetchAll();
	// }

	public function getForOrder($order_id){
		$SQL = "SELECT * FROM order_detail WHERE order_id=:order_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_id'=>$order_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetchAll();
	}

	public function create(){
		$SQL = "INSERT INTO order_detail (order_id, item_id, qty, price) VALUES (:order_id, :item_id, :qty, :price) ON DUPLICATE KEY UPDATE qty=qty+:qty";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_id'=>$this->order_id,
						'item_id'=>$this->item_id,
						'qty'=>$this->qty,
						'price'=>$this->price]);
		// return self::$_connection->lastInsertId();
	}

	public function find($order_id){
		$SQL = "SELECT * FROM order_detail WHERE order_id=:order_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_id'=>$order_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order_detail');
		return $STMT->fetch();
	}


	public function update(){
		$SQL = "UPDATE order_detail SET qty=:qty, price=:price WHERE order_detail_id = :order_detail_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'price'=>$this->price,
						'order_detail_id'=>$this->order_detail_id]);
		return $STMT->rowCount(); 
	}

	public function delete(){
		$SQL = "DELETE FROM order_detail WHERE order_detail_id=:order_detail_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_detail_id'=>$this->order_detail_id]);
	}
}