#!/usr/bin/php
<?PHP

function ft_split($str)
{

	$trimmed = trim($str);
	if ($trimmed)
	{	
		$new_str = preg_replace("( +)", " ", $trimmed);
		$my_tab = explode(" ", $new_str);
		sort($my_tab);
		return ($my_tab);
	}
}


$i = 1;
if ($argc > 1)
{
	$res = array();
	while ($i < $argc)
	{
		$split_arr = ft_split($argv[$i]);
		foreach ($split_arr as $elem)
			$res[] =$elem;
		$i++;	
	}
	sort($res);
	foreach($res as $el)
		echo "$el\n";
}

?>
