<?php

class Database{

	public $conn;

	public function __construct(){
		$this->conn = mysqli_connect("localhost", "root", "", "bsu_alumni");
		if (!$this->conn) {
			echo "Not Connected";
		}
	}


}


// $obj = new Connection();
// $obj->conn();

?>