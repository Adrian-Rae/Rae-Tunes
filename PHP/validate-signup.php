<?php
	//Basic Global Connections
	include('config.php');
	
	//Basic Local Scope variables
	$userExists = false;
	$newName;
	$newSurname;
	$newEmail;
	$newPassword;

	//Repsonse Object
	$returnObject = array("status"=>true,"message"=>"");

	
	//POST Error Handling
	
	if(!isset($_POST["name"])){ $returnObject["status"]=false; $returnObject["message"]+="POST <name> mismatch"+'\n'; }
	if(!isset($_POST["surname"])){ $returnObject["status"]=false; $returnObject["message"]+="POST <surname> mismatch"+'\n'; }
	if(!isset($_POST["email"])){ $returnObject["status"]=false; $returnObject["message"]+="POST <email> mismatch"+'\n'; }
	if(!isset($_POST["password"])){ $returnObject["status"]=false; $returnObject["message"]+="POST <password> mismatch"+'\n'; }
	
	if($returnObject["status"]==false){ echo json_encode($returnObject); die();}

	$newName=$_POST["name"];
	$newSurname=$_POST["surname"];
	$newEmail=$_POST["email"];
	$newPassword=$_POST["password"];

	$dataHandshake = Database::instance();
	$userExists = $dataHandshake->userExists($newEmail);
	if($userExists){
		$returnObject["status"]=false; 
		$returnObject["message"]="This email has already been used";
		echo json_encode($returnObject);
	}
	else{
		$dataHandshake->addUser($newName,$newSurname,$newEmail,$newPassword);

	}
	$dataHandshake->endSession();
	
	//========================== CONNECTION =====================
	class Database
	{
		private $conn;
		public static function instance(){
			static $instance = null;
			if($instance===null) $instance = new Database();
			return $instance;
		}
		private function __construct(){
			$this->conn = new mysqli($GLOBALS["serverName"], $GLOBALS["username"], $GLOBALS["password"]);
			if($this->conn->connect_error)
			{
				$returnObject["status"]=false; 
				$returnObject["message"]="Database connection failed";
				echo json_encode($returnObject);
				die();
			}
			else $this->conn->select_db($GLOBALS["database"]);
		}
		public function __destruct(){
		}
		public function endSession(){
			$this->conn->close();
		}
		public function addUser($n, $s, $e, $p){
			//above stands for name, surname, email and cipher (pass and salt hash)
			try{
				$salt = createRandomString(32);
				$api = createRandomString(32);
	
				$message = $p . $salt;
				$hashedPass = hash("sha256", $message);
				
				
				$query = 
					"INSERT INTO users 
					(firstname,lastname,email,salt,pass_hash,API_key)
					VALUES
					('" . $n . "','" . $s . "','" . $e . "','" . $salt . "','" . $hashedPass . "','" . $api . "')";      
				
				$result = $this->conn->query($query);
				$returnObject["status"]=true; 
				$returnObject["message"]= "<b> Your API KEY: </b>" . $api . "<br>" . "Please make a note, this is the only time this key is visible!";
				echo json_encode($returnObject);
			}
			catch(PDOException $error){
				$returnObject["status"]=false; 
				$returnObject["message"]="Database insertion failed";
				echo json_encode($returnObject); 
			}
		}
		public function userExists($e){
			try{
				$query = "SELECT email FROM users WHERE email='" . $e ."'";
				$result = $this->conn->query($query);
				if($result->num_rows == 0 ) return false;
				else return true;

			}
			catch(PDOException $error){
				$returnObject["status"]=false; 
				$returnObject["message"]="Database query failed";
				echo json_encode($returnObject);
				die();
			}
		}
	}
	//===================Salt/API key Generator=================================

	function createRandomString($length) {
     $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
     $randString = "";
     $randStringLen = $length;
     while(strlen($randString) < $randStringLen) {
         $randChar = substr(str_shuffle($charset), mt_rand(0, strlen($charset)), 1);
         $randString .= $randChar;
     }
     return $randString;
	}
	//=========================================================================


?>

