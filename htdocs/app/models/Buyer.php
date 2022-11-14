<?php
namespace app\models;

class Buyer extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM buyer";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Buyer');
		return $STMT->fetchAll();
	}

	public function get($buyer_id){
		$SQL = "SELECT * FROM buyer WHERE buyer_id=:buyer_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['buyer_id'=>$buyer_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Buyer');
		return $STMT->fetch();
	}


	public function insert(){
		$SQL = "INSERT INTO buyer (user_id, buyer_fname, buyer_lname, buyer_email) VALUES (:user_id, :buyer_fname, :buyer_lname, :buyer_email)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'buyer_fname'=>$this->buyer_fname,
						'buyer_lname'=>$this->buyer_lname,
						'buyer_email'=>$this->buyer_email]);
		return self::$_connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE buyer SET buyer_fname=:buyer_fname, buyer_lname=:buyer_lname, buyer_email=:buyer_email WHERE buyer_id=:buyer_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['buyer_id'=>$this->buyer_id,
						'buyer_fname'=>$this->buyer_fname,
						'buyer_lname'=>$this->buyer_lname,
						'buyer_email'=>$this->buyer_email]);
	}
}