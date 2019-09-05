#!/usr/bin/php
<?PHP

function change_title($str)
{
	$new_s = substr($str[0], 0, strpos($str[0], "\"") + 1); 
	return ($new_s. strtoupper(substr($str[0], strpos($str[0], "\"") + 1)));
}

function url_caps($str)
{
	$new_s = strtoupper($str[0]);
	$pattern = "/>(.*?)</s";
	$new = preg_replace_callback("$pattern", function ($match){
				return strtoupper($match[0]);}, $str[0]);
			return $new;
}

if ($argc == 2)
{  
	if(file_exists($argv[1]))
	{
		$fd = fopen($argv[1], 'r');
	
		$content = file_get_contents($argv[1]);
		$title = "/title[ ]?=[ ]?\"(.*?)\"/s";
		$link = "/<a (.*?)<\/a>/s";

		$new_s = preg_replace_callback($title, "change_title", $content);
		$res = preg_replace_callback($link, "url_caps", $new_s);
		echo "$res";
		fclose($fd);
	}
}

?>