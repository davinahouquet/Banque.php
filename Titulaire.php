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
    public function setNom(string $nom)
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
        return $this->getNom() . " " . $this->getPrenom() . " "  . $this->calcAge() . " ans " . $this->getVille() . " "  . "<br><br>";
    }

    public function calcAge()
    {
        return 30;
    }

    /*Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du
titulaire du compte.*/
    public function addcompte(CompteBancaire $comptesBancaire)
    {
        $this->_comptesBancaires[] = $comptesBancaire;
    }
    public function getInfosComptes()
    {
        $display = "";
        foreach ($this->_comptesBancaires as $compte) {
            $display .= $compte . "<br>";
        }
        return $display;
    }

    public function afficherComptes()
    {
        return $this->getNom() . " " . $this->getPrenom() . " " . $this->calcAge() . "<br>Liste des comptes bancaires :<br>" . $this->getInfosComptes() . "<br>";
    }
}
