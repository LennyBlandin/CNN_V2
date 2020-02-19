<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pokemon_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getPokemons($select, $where = null, $value = null, $returnType = 'array') {

	    //die(var_dump($returnType));

	    $this->db->select($select)
            ->from('pokemons');

	    if ($where != null && $value != null) {
	        $this->db->where($where, $value);
        }

        $result = $this->db->get();

	    if ($returnType === 'row') {
            if ($result->num_rows() > 0) {
                return $result->row();
            } else {
                return false;
            }
        } else {
            if ($result->num_rows() > 0) {
                return $result->result();
            } else {
                return false;
            }
        }
    }

    public function comparePokemons($poke1, $poke2) {

        $pokemon1HP = $poke1->pok_hp;
        $pokemon1Weight = $poke1->pok_weight;
        $pokemon1Height = $poke1->pok_height;

        $pokemon2HP = $poke2->pok_hp;
        $pokemon2Weight = $poke2->pok_weight;
        $pokemon2Height = $poke2->pok_height;

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
