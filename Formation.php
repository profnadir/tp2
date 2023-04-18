<?php
class Formation 
{
    private $_intitule;
    private $_nbrJours;
    private $_stagiaires = [];

    public function getIntitule(){
        return $this->_intitule;
    }

    public function setIntitule($intitule){
        $this->_intitule = $intitule;
    }

    public function getNbrJours(){
        return $this->_nbrJours;
    }

    public function setNbrJours($nbrJours){
        $this->_nbrJours = $nbrJours;
    }

    public function getStagiaires(){
        return $this->_stagiaires;
    }

    public function setStagiaires($stagiaires){
        $this->_stagiaires = $stagiaires;
    }

    public function __construct(String $intitule, int $nbrJours, Array $stagiaires) {
        $this->_intitule = $intitule;
        $this->_nbrJours = $nbrJours;
        $this->_stagiaires = $stagiaires;
    }

    public function calculerMoyenneFormation()
    {
        $sum = 0;
        $count = count($this->_stagiaires);

        foreach ($this->_stagiaires as $stagiaire) {
            $moyenne = $stagiaire->claculerMoyenne();
            $sum += $moyenne;
        }

        return $count == 0 ? 0 : $sum/$count;
    }

    public function getIndexMax()
    {
        $maxMoyenne = 0;
        $indexMaxMoyenne = -1;

        foreach ($this->_stagiaires as $index => $stagiaire) {
            $moyenne = $stagiaire->claculerMoyenne();
            if ($moyenne > $maxMoyenne) {
                $maxMoyenne = $moyenne;
                $indexMaxMoyenne = $index;
            }
        }

        return $indexMaxMoyenne;
    }

    public function afficherNomMax()
    {
        $indexMaxMoyenne = $this->getIndexMax();
        if ($indexMaxMoyenne == -1) {
            return "Aucun stagiaire dans la formation.";
        } else {
            $nomMaxMoyenne = $this->_stagiaires[$indexMaxMoyenne]->getNom();
            return $nomMaxMoyenne;
        }
    }

    public function afficherMinMax()
    {
        $indexMaxMoyenne = $this->getIndexMax();
        if ($indexMaxMoyenne == -1) {
            return "Aucun stagiaire dans la formation.";
        } else {
            $minNote = $this->_stagiaires[$indexMaxMoyenne]->trouverMin();
            return $minNote;
        }
    }

    public function trouverMoyenneParNom(string $nom)
    {
        foreach ($this->_stagiaires as $stagiaire) {
            if ($stagiaire->getNom() === $nom) {
                echo "La moyenne de ".$nom." est : ".$stagiaire->claculerMoyenne();
                return;
            }
        }
        echo "Aucun stagiaire trouvé avec le nom : ".$nom;
    }




}
