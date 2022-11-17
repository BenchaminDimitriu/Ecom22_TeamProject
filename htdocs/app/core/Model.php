<?php
namespace app\core;

class Model{
	protected static $_connection;

	public function __construct(){
		$server = 'localhost';//127.0.0.1
		$dbname = 'shopmart';
		$username = 'root';
		$password = '';

		try{
			self::$_connection = new \PDO("mysql:host=$server;dbname=$dbname",
											$username,$password);
			self::$_connection->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		}catch(\Exception $e){
			echo _("Failed connecting to the database");
			exit(0);
		}
	}

	protected function isValid(){
        //discover attributes on the class properties and runs the tests to validate the values in the properties
        $reflection = new \ReflectionObject($this);
        $classProperties = $reflection->getProperties();
        foreach($classProperties as $property){
            $propertyAttributes = $property->getAttributes();
            foreach($propertyAttributes as $attribute){
                $test= $attribute->newInstance();
                if(!$test->isValidData($property->getValue($this))){
                    return false;
                }
            }
        }
        return true;
    }

    public function __call($method, $arguments){
    	//this method gets called from the object receiving the bad call
    	// echo "Getting a call to the $method method with arguments ";
    	// print_r($arguments); 
    	if($this->isValid())
    		call_user_func_array([$this, $method], $arguments);
    	// else 
    	// 	echo "invalid data";
    }
}