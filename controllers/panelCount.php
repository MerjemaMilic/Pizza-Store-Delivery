<?php

class panelCount{
	public function totalUsers(){
		Flight::auth()->checkIfAdmin();
		$sql = "SELECT * FROM users";
		$result =  Flight::db()->query($sql);
		return $result->num_rows;
	}

	public function totalMessages(){
		Flight::auth()->checkIfAdmin();
		$sql = "SELECT * FROM messages";
		$result =  Flight::db()->query($sql);
		return $result->num_rows;
	}
	public function totalPendingOrders(){
		Flight::auth()->checkIfAdmin();
		$sql = "SELECT * FROM orders WHERE processed = 0";
		$result =  Flight::db()->query($sql);
		return $result->num_rows;	
	}
	public function totalOrders(){
		Flight::auth()->checkIfAdmin();
		$sql = "SELECT * FROM orders";
		$result =  Flight::db()->query($sql);
		return $result->num_rows;	
	}
}