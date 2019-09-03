#!/usr/bin/php
<?PHP

$res = array();
if ($argc > 2)
{
	$str = array_slice($argv, 2);
	foreach ($str as $elem)
	{
		$arr = explode(":", $elem);
		if ($arr[0] == $argv[1])
			$res[0] = $arr[1];
	}
	if (count($res) > 0)
		echo "$res[0]";
}

?>