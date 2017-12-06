<?php

	session_start();

	$SESSION = array();

	
	session_destroy();

	header('Location:test4.php?logout=yes');

?>