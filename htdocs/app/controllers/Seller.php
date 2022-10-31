<?php
namespace app\controllers;

class Seller extends \app\core\Controller{

	public function index(){

		$this->view('Seller/add');
	}


	public function delete(){

		$this->view('Seller/delete');
	}

}