<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pokemon_model2 extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getPokemon($select, $where = null, $value = null, $returnType = 'array') {

	    $this->db->select($select)
            ->from('pokemons');

	    if ($where != null && $value != null ) {
            $this->db->where($where, $value);
        }

	    $request = $this->db->get();

	    if ($request->num_rows() > 0) {
	        if ($returnType === 'row') {
	            return $request->row();
            } else {
	            return $request->result();
            }
        } else {
	        return false;
        }
    }

    public function comparePokemons($pokemon1, $pokemon2) {

	    //die(var_dump($pokemon1, $pokemon2));

        $pokemon1HP = $pokemon1->pok_hp;
        $pokemon1Weight = $pokemon1->pok_weight;
        $pokemon1Height = $pokemon1->pok_height;

        $pokemon2HP = $pokemon2->pok_hp;
        $pokemon2Weight = $pokemon2->pok_weight;
        $pokemon2Height = $pokemon2->pok_height;

        $compare = new stdClass();

        if ($pokemon1HP > $pokemon2HP) {
            $compare->hp = $pokemon1HP . ' > ' . $pokemon2HP;
        } else if ($pokemon1HP < $pokemon2HP) {
            $compare->hp = $pokemon1HP . ' < ' . $pokemon2HP;
        } else {
            $compare->hp = $pokemon1HP . ' = ' . $pokemon2HP;
        }

        if ($pokemon1Weight > $pokemon2Weight) {
            $compare->weight = $pokemon1Weight . ' > ' . $pokemon2Weight;
        } else if ($pokemon1HP < $pokemon2Weight) {
            $compare->weight = $pokemon1Weight . ' < ' . $pokemon2Weight;
        } else {
            $compare->weight = $pokemon1Weight . ' = ' . $pokemon2Weight;
        }
        if ($pokemon1Height > $pokemon2Height) {
            $compare->height = $pokemon1Height . ' > ' . $pokemon2Height;
        } else if ($pokemon1Height < $pokemon2Height) {
            $compare->height = $pokemon1Height . ' < ' . $pokemon2Height;
        } else {
            $compare->height = $pokemon1Height . ' = ' . $pokemon2Height;
        }

        //die(var_dump($compare));

        return $compare;
    }
}
