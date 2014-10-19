<?php 
	require '../config/config.php';
	require '../classes/db.php';
	require '../classes/processing.php';
	$process = new processing();

	if (isset($_POST['saveInfo']) && !empty($_POST['saveInfo'])) {
		$data = serialize($_POST['saveInfo']);
		$res = $process->z_input_save($data);
		if($res != false){
			echo $res;
		}else{
			echo 'not ok';
		}
		
		
	}else{
		echo 'not ok';
	}

 ?>