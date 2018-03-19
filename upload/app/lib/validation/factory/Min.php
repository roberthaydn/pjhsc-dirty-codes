<?php

class Min {
	public static function SetMin($field, $min) {
		return new MinStr($field, $min);
	}
}
