<?php 

class QueryBuilder {

	//Returns all info in a table
	public function selectAll($table) {

		require 'connect.php';

		$sql = "SELECT * FROM {$table}";

		//Perform sql query
		try { 
			return $conn->query($sql); 
		} 
		catch (Exception $e) {
			die("Couldn't find table information in the database!");
		}
	}
	public function select($table, $parameters) {

		require 'connect.php';

		$sql = sprintf(
				'SELECT * FROM %s WHERE %s = \'%s\'',
				$table, 
				implode('', array_keys($parameters)),
				'' . implode('', array_values($parameters))
			);

		//var_dump($sql);

		//Perform sql query
		try { 
			return $conn->query($sql); 
		} 
		catch (Exception $e) {
			die("Couldn't find table information in the database!");
		}
	}
	//Remove data from table
	public function delete($table, $parameters) {

		require 'connect.php';

		$sql = sprintf(
				'DELETE FROM %s WHERE %s = \'%s\'',
				$table, 
				implode('', array_keys($parameters)),
				'' . implode('', array_values($parameters))
			);

		//Perform sql query
		try {
			$conn->query($sql);
		} 
		catch (Exception $e) {
			die("Couldn't delete table information from the database!");
		}
	}
	//Add new data to table
	public function add($table, $parameters) {

		require 'connect.php';

		$sql = sprintf(
				'INSERT INTO %s (%s) VALUES (%s\')',
				$table, 
				implode(', ', array_keys($parameters)),
				'\'' . implode('\', \'', array_values($parameters))
			);
		
		//var_dump($sql);
		//echo "<br>";

		//Perform sql query
		try {
			$cmd = $conn->prepare($sql);
			$cmd->execute();

			//Return ID of last inserted item
			return $conn->insert_id;
		} 
		catch (Exception $e) {
			die("Couldn't add table information to the database!");
		}
	}
	//Update existing information
	public function update($table) {

		require 'connect.php';

		$id = $_POST['update_id'];
		$name = $_POST['update_name'];

		$released = 0;

		if (isset($_POST['update_released'])) {
			$released = 1;
		}

		$sql = "UPDATE {$table} 
				SET name = '$name', 
					released = '$released'
				WHERE id = $id";

		//var_dump($sql);

		//Perform sql query
		try {
			$conn->query($sql);
		} 
		catch (Exception $e) {
			die("Couldn't update table information from the database!");
		}
	}
	public function login($table) {

		require 'connect.php';

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT id, username, password, admin FROM {$table} WHERE username = '$username' AND password = '$password'";

		//Perform sql query
		try { 
			return $conn->query($sql); 
		} 
		catch (Exception $e) {
			die("Couldn't find table information in the database!");
		}		
	}
	//Executes all relevant form input queries
	public function handleFormInput($table) {

		if (isset($_POST['delete_id'])) {
			//QuizController::delete($table);
		}
		if (isset($_POST['update_id'])) {
			QueryBuilder::update($table);
		}
	}
}

?>