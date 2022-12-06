<?php
namespace app\models;

class Seller extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM seller" ;
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetchAll();
	}

	public function get($seller_id){
		$SQL = "SELECT * FROM seller WHERE seller_id=:seller_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$seller_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO seller (user_id, seller_fname, seller_lname, seller_email) VALUES (:user_id, :seller_fname, :seller_lname, :seller_email)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'seller_fname'=>$this->seller_fname,
						'seller_lname'=>$this->seller_lname,
						'seller_email'=>$this->seller_email]);
		return self::$_connection->lastInsertId();
	}

	public function getForContact($seller_id){
		$SQL = "SELECT * FROM seller WHERE seller_id=:seller_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$seller_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetchAll();
	}

	public function update(){
		$SQL = "UPDATE seller SET seller_fname=:seller_fname, seller_lname=:seller_lname, seller_email=:seller_email WHERE seller_id=:seller_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$this->seller_id,
						'seller_fname'=>$this->seller_fname,
						'seller_lname'=>$this->seller_lname,
						'seller_email'=>$this->seller_email]);
	}
}