<?php

class Unique {
	public static function SetUnique($field, $unique) {
		return new UniqueStr($field, $unique);
	}
}