#!/usr/bin/php
<?PHP

while (!feof(STDIN))
{ 
	echo "Enter a number: ";	
	$input = fgets(STDIN);
	if ($input) 
	{
		$number = trim($input);
		if (ctype_digit($number))
		{
			echo "The number "."$number";
			if ($number % 2 == 0)
				echo " is even";
			else
				echo " is odd";
		}
		else
			echo "'$number' is not a number"; 
	}
	echo "\n";
}
?>