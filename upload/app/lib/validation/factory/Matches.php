<?php

class Matches {
	public static function SetMatches($field, $matches) {
		return new MatchesStr($field, $matches);
	}
}