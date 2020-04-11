<?php 
class userController {
	public function deleteUser($id){
		Flight::auth()->checkIfAdmin();
		$sql = "DELETE FROM users WHERE id = $id";
		$result = Flight::db()->query($sql);
		Flight::redirect('/panel');
	}
}