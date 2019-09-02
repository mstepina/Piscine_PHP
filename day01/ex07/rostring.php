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


if ($argc > 1)
{
	$first_str = ft_split($argv[1]);
	$i = 1;
	while ($i < count($first_str))
	{	echo "$first_str[$i] ";
		$i++;
	}
	echo "$first_str[0]";
}

?>
