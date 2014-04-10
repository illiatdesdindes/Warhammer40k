<?php

trait Direction {
	
	public const UP		= 0;
	public const RIGHT	= 1;
	public const DOWN	= 2;
	public const LEFT	= 3;
	private $_direction	= 0;

	public function turnRight() {
		$this->_direction += 1;
		$this->_direction %= 4;
		return ($this->_direction);
	}

	public function turnLeft() {
		$this->_direction -= 1;
		$this->_direction %= 4;
		return ($this->_direction);
	}

	public function getDirection() {
		return ($this->_direction);
	}

	public function setDirection(int $direction) {
		$this->_direction = $direction % 4;
		return ;
	}
}

?>
