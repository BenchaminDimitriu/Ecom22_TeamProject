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

	public function create(){
		$SQL = "INSERT INTO order_history (user_id, status, payment_id) VALUES (:user_id, :status, :payment_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'status'=>$this->status,
						'payment_id'=>$this->payment_id]);
		return self::$_connection->lastInsertId();
	}

	public function findUserCart($user_id){
		$SQL = "SELECT * FROM order_history WHERE user_id=:user_id && status=:status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetch();
	}

	public function update(){
		$SQL = "UPDATE  order_history SET status=:status, payment_id=:payment_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>$this->status,
						'payment_id'=>$this->payment_id]);
		return $STMT->rowCount(); 
	}
}