<?php

abstract class House
{
	abstract public function getHouseName();
	abstract public function getHouseMotto();
	abstract public function getHouseSeat();

	public function introduce()
	{
		echo "House ";
		print($this->getHouseName());
		echo " of ";
		print($this->getHouseSeat());
		echo " : ";
		print("\"".$this->getHouseMotto()."\"");
		echo "\n";
	}

}

?>
