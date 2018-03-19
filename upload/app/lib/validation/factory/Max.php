<?php

class Max {
	public static function SetMax($field, $max) {
		return new MaxStr($field, $max);
	}
}
