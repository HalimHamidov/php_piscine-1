<?php
	if ($_GET["login"] == FALSE || $_GET["passwd"] == FALSE || $_GET["submit"] != 'OK') {
		header('Location: ../index.php?loginErr=1');
		exit("ERROR\n");
	}

	include('logout.php');
	include('auth.php');
	
	if (auth($_GET['login'], hash('whirlpool', $_GET['passwd'])) === TRUE) {
		$_SESSION['loggued_on_user'] = $_GET['login'];
		header('Location: ../index.php');
		exit("OK\n");
	}
	header('Location: ../index.php?loginErr=2');
	exit("ERROR\n");
?>