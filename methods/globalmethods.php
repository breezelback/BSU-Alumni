<?php

include 'PDOConnection.php';

// if (session_id() == '') {
// 	session_start();
// }

class DataOperation extends Connect{

	public $error;

	public function insertAny($tbl_name, $data, $status){
		$sql = '';  
		$sql .= "INSERT INTO ".$tbl_name;
		$sql .= "(".implode(",", array_keys($data)).") VALUES ";
		$sql .= "('".implode("','", array_values($data))."')";

		$stm = $this->connection->prepare($sql);
        
        if($stm->execute()) {
            exit($status);
        } else {
            exit($sql);
        }

	}

	function updateAny($tbl_name, $data, $id){

			$sql = '';
			$sql2 = '';
			$sql1 ="UPDATE ".$tbl_name." SET ";

			foreach ($data as $key => $value) {
			$sql2 .= $key." = '".$value."' , ";
			}
			
			$sql3=rtrim($sql2,", ");
			$sql .=$sql1.$sql3." WHERE id = ".$id;
			// $query = mysqli_query($this->conn, $sql);
			$query = $this->connection->prepare($sql);
		if ($query->execute()) {
			exit("Successfully Updated!!!");
		}else{
			exit($sql);
		}

	}

	function getFullname($id) {
		$sql = "SELECT * FROM user_information where id = $id";
		$query = $this->connection->query($sql);
		$row = $query->fetch();
		
		return $row->name. " " .$row->lastname;
		// return "lance jared";
	}


	function delete_any($table, $id) {
		$success = false;

		$sql = $this->connection->query("DELETE FROM ".$tbl_name." where id = '$id'");
		if($sql) {
			$success = true;
		}

		return $success;
	}

	// public function required_validation($fields){
	// 		$count = 0;

	// 		foreach ($fields as $key => $value) {
	// 			if (empty($value)) {
	// 				$count = $count + 1;
	// 			 return	$this->error = '<p class="text-danger">'.$key.' is required!</p>';				
	// 		}
	// 	}
	// }


	// function getUser($userid){

	// 	$query = "SELECT * FROM user_information where id = ".$userid;
	// 	$stmt = $this->connection->prepare($query);

    //     $result = $stmt->fetch();

	// 	$userdata = $result->fetch_array();
	// 	$username = $userdata['name'];
	// 	return $username;

	// 	//return $userid;

	// }



	// function delete_row($tbl_name, $id, $status){
	// 	$sql = $this->conn->query("DELETE FROM ".$tbl_name." where id = '$id'");
	// 	return $status;
	// }



}//end of class



?>