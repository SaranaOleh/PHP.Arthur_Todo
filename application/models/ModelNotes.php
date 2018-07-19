<?php

class ModelNotes extends Model{

    public function getAll(){
        return $this->db->notes->all();
    }
}