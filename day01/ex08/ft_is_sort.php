#!/usr/bin/php
<?PHP

function ft_is_sort($arr)
{
	$asc_sort = $arr;
	$desc_sort = $arr;
	sort($asc_sort);
	rsort($desc_sort);
	if ($asc_sort === $arr || $desc_sort === $arr)
		return (TRUE);
	else
		return (FALSE);
}

/*
$tab = array("1", "2", "3", "4", "5");
$tab1 = array("2", "2", "1", "4", "5");
$tab2 = array("are", "who", "you");
$tab3 = array("who", "are", "you");



if (ft_is_sort($tab3))
	echo "The array is sorted";
else
	echo "Not sorted";
*/
?>