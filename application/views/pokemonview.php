<?php

echo "Pokemon list:".PHP_EOL;
foreach ($pokemons as $pokemon){
	echo "Name: {$pokemon['name']} | Superpower: {$pokemon['superpower']}".PHP_EOL;
}
