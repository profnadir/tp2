<?php

class Stagiaire 
{
    private $_nom;
    private $_notes = [];

    public function getNom(){
        return $this->_nom;
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getNotes(){
        return $this->_notes;
    }

    public function setNotes($notes){
        $this->_notes = $notes;
    }

    public function __construct(String $nom, Array $notes) {
        $this->_nom = $nom;
        $this->_notes = $notes;
    }

    public function claculerMoyenne()
    {
        $sum = 0;
        foreach ($this->_notes as  $note) {
            $sum += $note;
        }
        return count($this->_notes) == 0 ? 0 : $sum/count($this->_notes);
    }

    public function trouverMax()
    {
        $max = $this->_notes[0];
        foreach ($this->_notes as  $note) {
            if($max < $note) $max = $note;
        }
        return count($this->_notes) == 0 ? 0 : $max;
        //return count($this->_notes) == 0 ? 0 : max($this->_notes);
    }

    public function trouverMin()
    {
        $min = $this->_notes[0];
        foreach ($this->_notes as  $note) {
            if($min > $note) $min = $note;
        }
        return count($this->_notes) == 0 ? 0 : $min;
        //return count($this->_notes) == 0 ? 0 : min($this->_notes);
    }
}