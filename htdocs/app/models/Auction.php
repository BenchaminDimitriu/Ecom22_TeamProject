<?php
namespace app\models;

class Auction extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM auction";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Auction');
		return $STMT->fetchAll();
	}

	public function get($auction_id){
		$SQL = "SELECT * FROM auction WHERE auction_id=:auction_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['auction_id'=>$auction_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Auction');
		return $STMT->fetch();
	}

	
	public function insert(){
		$SQL = "INSERT INTO auction (item_id, seller_id, bidder_id) VALUES (:item_id, :seller_id, :bidder_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$this->item_id,
						'seller_id'=>$this->seller_id,
						'bidder_id'=>$this->bidder_id]);
		return self::$_connection->lastInsertId();
	}
	
}