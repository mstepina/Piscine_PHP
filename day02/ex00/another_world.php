#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$trimmed = trim($argv[1]);
	$str = preg_replace('/\s+/', " ", $trimmed);
	$new_str = preg_replace('/\t+/', " ", $str);
	echo "$new_str\n";
}

?>