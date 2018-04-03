#!/usr/bin/php
<?php
	echo "Enter a number: ";
	while ($line = fgets(STDIN))
	{
		$line = substr($line, 0, -1);
		if (strlen($line) > 0 && is_numeric($line))
		{
			if (($line % 2) == 0)
				echo "The number $line is even\n";
			else
				echo "The number $line is odd\n";
		}
		else
			echo "'$line' is not a number\n";
		echo "Enter a number: ";
	}
	echo "^D\n";
?>