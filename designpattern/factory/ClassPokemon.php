<?php

class ClassPokemon {
	private $_pokemonName;
	private $_moveset;
	private $_iv;

	public function __construct($pokemonName, $moveset, $iv) {
		$this->_pokemonName = $pokemonName;
		$this->_moveset = $moveset;
		$this->_iv = $iv;
	}

	public function getPokemon() {
		return $this->_pokemonName.' - '.$this->_moveset[0].' & '.$this->_moveset[1].' - '.$this->_iv;
	}
}

class Pokemon {
	public static function create($pokemonName, $moveset, $iv) {
		return new ClassPokemon($pokemonName, $moveset, $iv);
	}
}

$pokemon = Pokemon::create('Exeggutor', array('Zen Headbutt', 'Solar Beam'), '95.5%');
$pokemonInfo = $pokemon->getPokemon();
//print_r($pokemon->getPokemon()); //expected outPut = Exeggutor - Zen Headbutt & Solar Beam - 95.5%

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p><span style="color:red">Pokemon Info:</span><span style="color:blue"><?= $pokemonInfo.' another echo here...'; ?><span></p>
</body>
</html>


