<?php

class RequiredFactory {
	public static function setRequired($field, $required) {
		return new Required($field, $required);
	}
}
