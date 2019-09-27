<?php

Class NightsWatch 
{
	public function recruit($person)
	{
		if ($person instanceof IFighter)
			$person->fight();
	}
	public function fight()
	{
		return ;
	}
}

?>
