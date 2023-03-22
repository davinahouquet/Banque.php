<?php

class Titulaire
{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $_comptesBancaires;

    public function __construct(string $nom, string $prenom,  string $dateNaissance, string $ville)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_ville = $ville;
        $this->_comptesBancaires = [];
    }

    public function getNom()
    {
        return $this->_nom;
    }
    public function setnom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    public function getVille()
    {
        return $this->_ville;
    }
    public function setVille(string $ville)
    {
        $this->_ville = $ville;
    }

    public function getComptesBancaires()
    {
        return $this->_comptesBancaires;
    }
    public function setComptesBancaires($comptesBancaires)
    {
        $this->_comptesBancaires = $comptesBancaires;
    }

    /*On doit pouvoir :
Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes
appartenant à celui(celle)-ci.*/
    public function __toString()
    {
        return $this->getNom() . " " . $this->getPrenom() . " "  . $this->calcAge() . " ans " . $this->getVille() . " "  . "<br>";
    }

    public function calcAge()
    {
        //  $this->_getDateNaissance(date_diff(date_create($this->_dateNaissance))) . " "
        return 30;
    }

    /*Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du
titulaire du compte.*/
    public function addTitulaire(Titulaire $comptesBancaires){
        $this->_comptesBancaires[] = $comptesBancaires;
    }
    public function getInfos(){
        foreach($this->_comptesBancaires as $compte){
            echo "Titulaire du compte :" .$this->_nom .$this->_prenom. $compte ."<br>";
        }
    }
}
