<?php

class Lannister 
{
	public function sleepWith($person)
	{
		if (is_subclass_of($person, 'Lannister'))
			echo "Not even if I'm drunk !\n";
		else
			echo "Let's do this.\n";
	}
}

?>