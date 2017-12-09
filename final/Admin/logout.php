<?php

	session_start();

	$SESSION = array();

	
	session_destroy();

	header('Location:../main_login.php?logout=yes');

?>