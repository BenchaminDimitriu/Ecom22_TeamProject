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

	public function getForSeller($seller_id){
		$SQL = "SELECT * FROM item WHERE seller_id=:seller_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$seller_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Item');
		return $STMT->fetchAll();
	}

		public function search($searchTerm){
		//get all newest first
		$SQL = "SELECT * FROM item WHERE item_name LIKE :searchTerm";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['searchTerm'=>"%$searchTerm%"]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Item');
		return $STMT->fetchAll();
	}


	public function insert(){
		$SQL = "INSERT INTO item(seller_id, user_id, item_name, item_price, item_description, item_image) VALUES (:seller_id, :user_id, :item_name, :item_price, :item_description, :item_image)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$this->seller_id,
						'user_id'=>$this->user_id,
						'item_name'=>$this->item_name,
						'item_price'=>$this->item_price,
						'item_description'=>$this->item_description,
						'item_image'=>$this->item_image]);
		return self::$_connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE item SET seller_id=:seller_id, user_id=:user_id, item_name=:item_name, item_price=:item_price, item_description=:item_description, item_image=:item_image WHERE item_id=:item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$this->seller_id,
						'user_id'=>$this->user_id,
						'item_name'=>$this->item_name,
						'item_price'=>$this->item_price,
						'item_description'=>$this->item_description,
						'item_image'=>$this->item_image]);
	}

	public function delete(){
		$SQL = "DELETE FROM item WHERE item_id=:item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$this->item_id]);
	}	
}