<?php 
	// require 'config/config.php';
	require 'config/config.php';
	require 'classes/db.php';
	$page = "";
	if (isset($_GET['page']) && !empty($_GET['page'])) {
		$page = $_GET['page'];
	}else{

	}
	require 'view/header.php';
	require 'view/nav.php';
	if ($page == 'z-input') {
		require 'z-input/view/z-input.php';
	}elseif($page == 'z-input-id'){
		require 'z-input/view/z-input-id.php';
	}
 ?>