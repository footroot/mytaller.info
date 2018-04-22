<?php 
//used to get mysql database connection
/**
 * 
 */
 class database{

 	//specify your own database credentials
 	private $host = "mysql.hostinger.co.uk";
 	private $db_name = "u148878710_login";
 	private $username = "u148878710_root";
 	private $password = "@Ottovolante72";
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