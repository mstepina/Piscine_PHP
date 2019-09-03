#!/usr/bin/php
<?PHP

$res = 0;
if ($argc == 4)
{
	$first_n = trim($argv[1]);
	$second_n = trim($argv[3]);
	$sign = trim($argv[2]);
	switch ($sign)
	{
		case '+':
			$res = $first_n + $second_n;
			break ;
		case '-':
			$res = $first_n - $second_n;
			break ;
		case '*':
			$res = $first_n * $second_n;
			break ;
		case '/':
			$res = $first_n / $second_n;
			break ;
		case '%':
			$res = $first_n % $second_n;
			break ;
	}
	echo "$res";
}
else
	echo "Incorrect Parameters";

?>