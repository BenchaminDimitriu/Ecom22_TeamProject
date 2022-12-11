<?php
namespace app\models;

class Login extends \app\core\Model{

	public function get($username){
		$SQL = "SELECT * FROM login WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Login');
		return $STMT->fetch();
	}


	public function getSeller(){
		$SQL = "SELECT * FROM seller WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}

	public function getBuyer(){
		$SQL = "SELECT * FROM buyer WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Buyer');
		return $STMT->fetch();
	}


	public function insert(){
		$SQL = "INSERT INTO login(username, password_hash, role) VALUES (:username, :password_hash, :role)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,
						'password_hash'=>$this->password_hash,
						'role'=>$this->role]);
	}

	// public function updatePassword(){
	// 	$SQL = "UPDATE login SET password_hash=:password_hash WHERE user_id=:user_id";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['password_hash'=>$this->password_hash,
	// 					'user_id'=>$this->user_id]);
	// }

	public function update2fa(){
		$SQL = "UPDATE login SET secret_key=:secret_key WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['secret_key'=>$this->secret_key,
						'user_id'=>$this->user_id]);
	}

}