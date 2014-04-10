<?php

class ImperialFrigate extends Ship {

	public function __construct(string $shipName, int $x, int $y, int $direction, array $arms) {
		parent::__construct($shipName, $x, $y, $direction, $arms);
		$this->size		= array(1, 4);
		$this->hull		= 5;
		$this->pp 		= 10;
		$this->speed	= 15;
		$this->operate	= 4;
		$this->shield	= 0;
	}
}

?>
