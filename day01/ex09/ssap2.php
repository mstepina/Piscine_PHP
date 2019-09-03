#!/usr/bin/php
<?PHP

function ft_split($str)
{

	$trimmed = trim($str);
	if ($trimmed)
	{	
		$new_str = preg_replace("( +)", " ", $trimmed);
		$my_tab = explode(" ", $new_str);
		return ($my_tab);
	}
}

function comparison ($str1, $str2)
{
	$symbols = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	$str1_new = strtolower($str1);
	$str2_new = strtolower($str2);
	$i = 0;
	while (($i < strlen($str1_new)) || ($i < strlen($str2_new)))
	{
		$index1 = strpos($symbols, $str1_new[$i]);
		$index2 = strpos($symbols, $str2_new[$i]);
		if ($index1 == $index2)
			$i++;
		else if ($index1 < $index2)
			return (-1);
		else
			return (1); 
	}

}
$res = array();
$i = 1;
if ($argc > 1)
{
	while ($i < $argc)
	{
		$str_arr = ft_split($argv[$i]);
		if ($str_arr[0] != "")
			$res = array_merge($res, $str_arr);
		$i++;	
	}
}
usort($res, "comparison");
foreach ($res as $elem)
	echo "$elem\n";
?>