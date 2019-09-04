#!/usr/bin/php
<?PHP

function get_month($month)
{
	$month = strtolower($month);
	$arr_month = array("janvier" => "1", "f[ée]vrier" => "2", "mars" => 3, "avril" => "4",
						"mai" => "5", "juin" => "6", "juillet" => "7", "ao[ûu]t" => "8", 
						"septembre" => "9", "octobre" => "10", "novembre" => "11", "d[eé]cembre" => "12");
	$res = $arr_month[$month];
	return ($res);
}

function check_time($time)
{
	$time = explode(":", $time);
	if (count($time) != 3)
		return (0);
	else
	{
		if (preg_match("/^[0-2][0-9]$/", "$time[0]") && preg_match("/^[0-2][0-9]$/", "$time[1]") && 
			preg_match("/^[0-2][0-9]$/", "$time[2]"))
			return (1);
		else
			return (0);
	}
}

function check_day($letters, $numbers)
{
	if (preg_match("/^([lL]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)$/","$letters"))
	{
		if(preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $numbers, $numbers))
			return(1);
	}
	return (0);
}

function check_month($month)
{
	if (preg_match("/([Jj]anvier|[Ff]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre)/", "$month"))
		return (1);
	return (0);
}

function check_year($year)
{
	return (preg_match("/^[0-9]{4}$/", "$year"));
}

if ($argc == 2)
{
	$date = $argv[1];
	$arr = explode(" ", $date);
	$c = count($arr);
	if (count($arr) == 5)
	{
		if (check_day($arr[0], $arr[1])  && check_month($arr[2]) && check_time($arr[4]))
		{
			$time = explode(":", $arr[4]);
			date_default_timezone_set("Europe/Paris");
			$month = get_month($arr[2]);
			$res = mktime($time[0], $time[1], $time[2], $month, $arr[1], $arr[3]);
			echo "$res\n";
		}
		else
			echo "Wrong Format\n";
	}
	else
		echo "Wrong Format\n";
}

?>
