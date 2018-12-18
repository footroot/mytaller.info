<?php 
//used to get mysql database connection
/**
 * 
 */
 class database{

 	//specify your own database credentials
 	private $host = "localhost:8080";
 	private $db_name = "php_login_system";
 	private $username = "footroot";
 	private $password = "Ottovolante";
 	public $conn;

 	//get the database connection
 	public function getConnection(){
 		$this->conn = null;
 		try{
 			$this->conn = new PDO("mysql:host=".$this->host."; dbname=". $this->db_name,$this->username,$this->password);

 		} catch(PDOException$exception){
 			echo "connection error: " . $exception->getMessage();
 		}
 		return $this->conn;
 	}


 } 
 ?>