<!DOCTYPE html>
<html>
	<head>
		<title>Database setup form</title>
		<link rel="stylesheet" href="css/plainw.css">
		<style>
			#top-bar {
				margin-bottom: 3.5vh;
			}
		</style>
	</head>

	<body>
		<form action="./install.php" method="post">
			<div id="top-bar">Database setup</div>
			<input type="text" name="msqlogin" value="<?php echo $_GET['msqlogin']; ?>" placeholder="Mysql Login" /><br />
			<input type="password" name="msqpasswd" value="<?php echo $_GET['msqpasswd']; ?>" placeholder="Mysql Password" /><br />
			<input type="text" name="dbname" value="" placeholder="Name of the new Mysql database" /><br />
			<input id="butt" type="submit" name="submit" value="OK" />
		</form>
	</body>
</html>