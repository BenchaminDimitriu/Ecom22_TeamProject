<?php
namespace app\models;

class Review extends \app\core\Model{
	
	public function getAll(){
		$SQL = "SELECT * FROM review";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

	public function get($review_id){
		$SQL = "SELECT * FROM review WHERE review_id=:review_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['review_id'=>$review_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO review (user_id, item_id, rating, comment) VALUES (:user_id, :item_id, :rating, :comment)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'item_id'=>$this->item_id,
						'rating'=>$this->rating,
						'comment'=>$this->comment]);
		return self::$_connection->lastInsertId();
	}

	public function getReviews($user_id) {
		$SQL = "SELECT * FROM review CROSS JOIN item on review.item_id=item.item_id WHERE review.user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

	public function getForSellerReviews($item_id) {
		$SQL = "SELECT * FROM review CROSS JOIN item on review.item_id=item.item_id WHERE item.item_id=:item_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$item_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

}

?>