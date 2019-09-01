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

//print_r(ft_split("   wow so String     much   split  "));

?>