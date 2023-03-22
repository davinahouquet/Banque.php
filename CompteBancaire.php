<?php

class CompteBancaire
{
    private string $_libelle;
    private int $_soldeInitial;
    private string $_deviseMonetaire;
    private Titulaire $_titulaireUnique;

    public function __construct(string $libelle, int $soldeInitial, string $deviseMonetaire, Titulaire $titulaireUnique)
    {
        $this->_libelle = $libelle;
        $this->_soldeInitial = $soldeInitial;
        $this->_deviseMonetaire = $deviseMonetaire;
        $this->_titulaireUnique = $titulaireUnique;
        // $this->_titulaireUnique ->addTitulaireUnique($this);
    }

    public function getLibelle()
    {
        return $this->_libelle;
    }
    public function setLibelle(string $libelle)
    {
        $this->_libelle = $libelle;
    }

    public function getSoldeInitial()
    {
        return $this->_soldeInitial;
    }
    public function setSoldeInitial(int $soldeInitial)
    {
        $this->_soldeInitial = $soldeInitial;
    }

    public function getDeviseMonetaire()
    {
        return $this->_deviseMonetaire;
    }
    public function setDeviseMonetaire(int $deviseMonetaire)
    {
        $this->_deviseMonetaire = $deviseMonetaire;
    }

    public function getTitulaireUnique()
    {
        return $this->_titulaireUnique;
    }
    public function setTitulaireUnique(int $titulaireUnique)
    {
        $this->_titulaireUnique = $titulaireUnique;
    }

    /*Sur un compte bancaire, on doit pouvoir :
Créditer le compte de X euros*/
    public function crediter($somme)
    {
        $result = "Crédit d'une somme de " . $somme . " " . $this->_deviseMonetaire . "sur le compte " . $this->_libelle . ". Nouveau solde = " . $somme + $this->_soldeInitial . " " . $this->_deviseMonetaire . "<br>";
        return $result;
    }
    /*Débiter le compte de X euros*/
    public function debiter($somme)
    {
        $result = "Débit d'une somme de " . $somme . " " . $this->_deviseMonetaire . "sur le compte " . $this->_libelle . ". Nouveau solde = " . $this->_soldeInitial - $somme . " " . $this->_deviseMonetaire . "<br>";
        return $result;
    }
    /* Effectuer un virement d'un compte à l'autre*/
    public function virementInterne($somme)
    {
        $result = "Un virement interne de " . $somme . " " . $this->_deviseMonetaire . " depuis le compte " . $this->_libelle . " sur le compte " . $this->_libelle . "a été effectué. <br>";
        return $result;
    }

    public function getInfos()
    {

    }

    public function __toString()
    {
        return $this->getLibelle() . $this->getSoldeInitial() . $this->getDeviseMonetaire() . $this->getTitulaireUnique();
    }
}
