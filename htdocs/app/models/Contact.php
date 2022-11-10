<?php
namespace app\models;

class Contact extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM contact";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Contact');
		return $STMT->fetchAll();
	}

	public function get($invoice_id){
		$SQL = "SELECT * FROM contact WHERE invoice_id=:invoice_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['invoice_id'=>$invoice_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Contact');
		return $STMT->fetch();
	}

	
	public function insert(){
		$SQL = "INSERT INTO contact (invoice_id, buyer_id, seller_id, message) VALUES (:invoice_id, :buyer_id, :seller_id, :message)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['invoice_id'=>$this->invoice_id,
						'buyer_id'=>$this->buyer_id,
						'seller_id'=>$this->seller_id,
						'message'=>$this->message]);
		return self::$_connection->lastInsertId();
	}

	public function delete(){
		$SQL = "DELETE FROM contact WHERE invoice_id=:invoice_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['invoice_id'=>$this->invoice_id]);
	}	
}