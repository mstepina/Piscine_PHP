#!/usr/bin/php
<?PHP

$res = 0;
if ($argc == 2)
{
	$trimmed = preg_replace("( +)", "", $argv[1]);
	if(strpos($trimmed, "+"))
	{   	
		$arr = explode("+", $trimmed);
	    if (count($arr == 2) && ctype_digit($arr[0]) && ctype_digit($arr[1]))
	    	$res = $arr[0] + $arr[1];
	}
	else  if(strpos($trimmed, "-"))
	{
	   	$arr = explode("-", $trimmed);
	   	if (count($arr == 2) && ctype_digit($arr[0]) && ctype_digit($arr[1]))
	   		$res = $arr[0] - $arr[1];
	}
	else  if(strpos($trimmed, "*"))
	{   	
		$arr = explode("*", $trimmed);
		if (count($arr == 2) && ctype_digit($arr[0]) && ctype_digit($arr[1]))
			$res = $arr[0] * $arr[1];
	}
	else  if(strpos($trimmed, "/"))
	{   
		$arr = explode("/", $trimmed);
		if (count($arr == 2) && ctype_digit($arr[0]) && ctype_digit($arr[1]))
			$res = $arr[0] / $arr[1];
	}
	else  if(strpos($trimmed, "%"))
	{   
		$arr = explode("%", $trimmed);
		if (count($arr == 2) && ctype_digit($arr[0]) && ctype_digit($arr[1]))
			$res = $arr[0] % $arr[1];
	}
	else
	{
		echo "Syntax error";
		return ;
	}
	if (count($arr == 2) && ctype_digit($arr[0]) && ctype_digit($arr[1]))
		echo "$res";
	else
		echo "Syntax error";
}
else
	echo "Incorrect Parameters";

?>
