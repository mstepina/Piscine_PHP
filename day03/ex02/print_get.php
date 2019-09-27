<?php
	if ($_GET) // array of variables passed to the current script via the URL parameters (aka. query string) 
	{
		foreach ($_GET as $key => $value) {
			echo "$key: $value\n";
		}
	}
?>
