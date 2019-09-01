#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$trimmed = trim($argv[1]);
	$new_str = preg_replace("( +)", " ", $trimmed);
	 echo "$new_str";
}
?>
