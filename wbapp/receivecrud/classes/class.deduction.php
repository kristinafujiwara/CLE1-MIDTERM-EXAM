<?php
class Deduction{
	private $DB_SERVER='localhost';
	private $DB_USERNAME='root';
	private $DB_PASSWORD='';
	private $DB_DATABASE='db_wbapp';
	private $conn;
	public function __construct(){
		$this->conn = new PDO("mysql:host=".$this->DB_SERVER.";dbname=".$this->DB_DATABASE,$this->DB_USERNAME,$this->DB_PASSWORD);
		
	}
	
	public function new_deduction($description,$amount,$lastname,$firstname){
		
		/* Setting Timezone for DB */
		$NOW = new DateTime('now', new DateTimeZone('Asia/Manila'));
		$NOW = $NOW->format('Y-m-d H:i:s');

		$data = [
			[$lastname,$firstname,$description,$amount],
		];
		$stmt = $this->conn->prepare("INSERT INTO tbl_deduction (user_lastname, user_firstname, deduct_description, deduct_amount) VALUES (?,?,?,?)");
		try {
			$this->conn->beginTransaction();
			foreach ($data as $row)
			{
				$stmt->execute($row);
			}
			$this->conn->commit();
		}catch (Exception $e){
			$this->conn->rollback();
			throw $e;
		}

		return true;

	}

	public function list_deduction(){
		$sql="SELECT * FROM tbl_deduction";
		$q = $this->conn->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){
		  $data[]=$r;
		}
		if(empty($data)){
		   return false;
		}else{
			return $data;	
		}
	}

	function get_user_id($lastname){
		$sql="SELECT user_id FROM tbl_deduction WHERE user_lastname = :lastname";	
		$q = $this->conn->prepare($sql);
		$q->execute(['lastname' => $lastname]);
		$user_id = $q->fetchColumn();
		return $user_id;
	}
	function get_deduct_description($id){
		$sql="SELECT deduct_description FROM tbl_deduction WHERE user_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$deduct_description = $q->fetchColumn();
		return $deduct_description;
	}
	function get_user_firstname($id){
		$sql="SELECT user_firstname FROM tbl_deduction WHERE user_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$user_firstname = $q->fetchColumn();
		return $user_firstname;
	}
	function get_user_lastname($id){
		$sql="SELECT user_lastname FROM tbl_deduction WHERE user_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$user_lastname = $q->fetchColumn();
		return $user_lastname;
	}
	function get_deduct_amount($id){
		$sql="SELECT deduct_amount FROM tbl_deduction WHERE user_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$deduct_amount = $q->fetchColumn();
		return $deduct_amount;
	}

}
