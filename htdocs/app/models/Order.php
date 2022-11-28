<?php
namespace app\models;

class Order extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM `order`";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetchAll();
	}

	// public function get($order_id){
	// 	$SQL = "SELECT * FROM `order` WHERE order_id=:order_id";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['order_id'=>$order_id]);
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
	// 	return $STMT->fetch();
	// }

	public function create(){
		$SQL = "INSERT INTO `order` (user_id, status) VALUES (:user_id, :status)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'status'=>$this->status]);
		$this->order_id = self::$_connection->lastInsertId();
		return $this->order_id;
	}

	public function findUserCart($user_id){
		$SQL = "SELECT * FROM `order` WHERE user_id=:user_id && status=:status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id, 'status'=>'cart']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetch();
	}

	public function find($order_id){
		$SQL = "SELECT * FROM `order` WHERE order_id=:order_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_id'=>$order_id, 'status'=>'cart']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetch();
	}


	public function update(){
		$SQL = "UPDATE  `order` SET status=:status, payment_id=:payment_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>$this->status,
						'payment_id'=>$this->payment_id]);
		return $STMT->rowCount(); 
	}
}