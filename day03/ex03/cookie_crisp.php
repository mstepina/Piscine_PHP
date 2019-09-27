<?php

if ($_GET["action"])

{
	if ($_GET["action"] == "set" && $_GET["name"] != '' && $_GET["value"] != '')
	{	
		//echo "wow";
		setcookie($_GET["name"], $_GET["value"], time() + 86400);

	}
	else if ($_GET["action"] == "get" && $_GET["name"] != ''  && !$_GET["value"])
	{
		if($_COOKIE[$_GET["name"]])
		{	
			echo $_COOKIE[$_GET["name"]]; // retrieves the value of the cookie 
		}
	}
	else if ($_GET["action"] == "del" && $_GET["name"] != '' && !$tab["value"])
		setcookie($_GET["name"], '', time() - 1);
}

?>