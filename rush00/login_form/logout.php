<?php
	session_start();
	foreach ($_SESSION as $key => $val) {
		$_SESSION[$key] = '';
	}
	header('Location: /rush00/index.php');
?>