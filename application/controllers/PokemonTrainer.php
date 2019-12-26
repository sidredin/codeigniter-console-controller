<?php


class PokemonTrainer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("PokemonModel", "pokemon");
	}

	public function addPokemon($name, $superpower)
	{
		$status = $this->pokemon->add($name, $superpower);
		if($status===true) echo "Pokemon added".PHP_EOL;
	}

	public function getPokemonsList($name = 'Pikachu')
	{
		$data = [];
		$data['pokemons'] = $this->pokemon->getList();
		$this->load->view('pokemonview', $data);
	}
}
