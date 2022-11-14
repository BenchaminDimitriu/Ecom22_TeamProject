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

	public function get($contact_id){
		$SQL = "SELECT * FROM contact WHERE contact_id=:contact_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['contact_id'=>$contact_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Contact');
		return $STMT->fetch();
	}

	public function getSeller($seller_id){
		$SQL = "SELECT * FROM contact WHERE seller_id=:seller_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$seller_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Contact');
		return $STMT->fetchAll();
	}

	public function insert(){
		$SQL = "INSERT INTO contact (buyer_id, seller_id, title, message) VALUES (:buyer_id, :seller_id, :title, :message)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['buyer_id'=>$this->buyer_id,
						'seller_id'=>$this->seller_id,
						'title'=>$this->title,
						'message'=>$this->message]);
		return self::$_connection->lastInsertId();
	}

	public function delete(){
		$SQL = "DELETE FROM contact WHERE contact_id=:contact_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['contact_id'=>$this->contact_id]);
	}	
}