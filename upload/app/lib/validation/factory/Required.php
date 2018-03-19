<?php

class Required {
	public static function SetRequired($field, $required) {
		return new RequiredStr($field, $required);
	}
}
