<?php


class PokemonModel extends CI_Model {
	public function add($name, $superpower){
		$status = $this->db->insert(
			"pokemon",
			[
				'name' => $name,
				'superpower'  => $superpower,
			]
		);

		return $status;
	}

	public function getList(){
		$pokemons = $this->db->select()->from('pokemons')->get()->result_array();

		return $pokemons;
	}
}
