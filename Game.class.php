<?php

const

class Game {

	private	$_x;
	private	$_y;
	private	$_objects = [];

	public function __construct(int $x, int $y, array $objects) {
		$this->_x = $x;
		$this->_y = $y;
		$this->_objects = $objects;
	}

	public function push(Ship $object) {
		$this->_objects[] = array($x, $y, $object);
	}
}

?>
