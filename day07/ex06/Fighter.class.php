<?php
	abstract class Fighter {
		public function __construct($rank) {}
		abstract protected function fight($target);
	}
?>