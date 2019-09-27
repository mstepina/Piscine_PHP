<?php

class UnholyFactory {

		private $_array = array();

		public function absorb($person) {
			$rank = mb_strtolower(get_class($person));
			if ($rank === 'footsoldier')
				$rank = substr($rank, 0, 4)." ".substr($rank, 4, 7); // "foot soldier"
			if (array_key_exists($rank, $this->_array))
			    echo "(Factory already absorbed a fighter of type " . $rank . ")" . "\n";
			else
			{
				$this->_array[$rank] = $person;
				if (is_subclass_of($person, 'Fighter'))
					echo "(Factory absorbed a fighter of type " . $rank . ")" . "\n";
				else
					echo "(Factory can't absorb this, it's not a fighter)" . "\n";
			}
		}

		public function fabricate($rf) {
			if ($rf === 'foot soldier' || $rf === 'archer' || $rf === 'assassin')
			{
				echo "(Factory fabricates a fighter of type " . $rf . ")" . "\n";
				return ($this->_array[$rf]);
			}
			else
			{
				echo "(Factory hasn't absorbed any fighter of type " . $rf . ")" . "\n";
				return (NULL);
			}
		}
	}

?>