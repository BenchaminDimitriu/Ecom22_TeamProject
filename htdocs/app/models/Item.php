<?php
namespace app\models;

class Item extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM item";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Item');
		return $STMT->fetchAll();
	}

	public function get($item_id){
		$SQL = "SELECT * FROM item WHERE item_id=:item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$item_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Item');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO item(seller_id, item_name, item_price, item_description, item_image) VALUES (:seller_id, :item_name, :item_price, :item_description, :item_image)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$this->seller_id,
						'item_name'=>$this->item_name,
						'item_price'=>$this->item_price,
						'item_description'=>$this->item_description,
						'item_image'=>$this->item_image]);
		return self::$_connection->lastInsertId();
	}

	public function delete(){
		$SQL = "DELETE FROM item WHERE item_id=:item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$this->item_id]);
	}	
}