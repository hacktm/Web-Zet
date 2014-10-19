<?php 
class processing{
	
	private $DB;
	
	public function __construct(){
		$this->DB = new Db();
		$this->DB = $this->DB->connect();
	}

	public function z_input_save($data){
		$data = $this->secure($data);
		$sql = "INSERT INTO `z-input` VALUES ('','$data')";
		if($this->DB->query($sql)){
				return $this->DB->insert_id;
			}
			return false;
			
		}
	public function z_input_get_by_id($id){
		$id = $this->secure($id);
		$sql = "SELECT * FROM `z-input` WHERE id = '$id'";
		$res = $this->DB->query($sql);
		if($res === false) {
			trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $this->DB->error, E_USER_ERROR);
			return false;
		} else {
			if ($res->num_rows != 0) {
				$row = $res->fetch_assoc();
				
				return $row['json'];
			}else{
				return false;
			}
		
		}
	}
		
	private function secure($x){
		$x = trim(strip_tags($this->DB->real_escape_string($x)));
		return $x;
	}
}
 ?>