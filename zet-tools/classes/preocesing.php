<?php 
class processing{
	
	private $DB;
	
	public function __construct(){
		$this->DB = new Db();
		$this->DB = $this->DB->connect();
	}

	public z_input_save($data){
		$sql = "INSERT INTO `z-index` VALUES ('','$data')";
		if($this->DB->query($sql)){
			return true;
		}
		return false;
	}
}
 ?>