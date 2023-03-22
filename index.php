<h1>Banque</h1>
<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires
    et leurs comptes bancaires respectifs.
</p>
<h2>Résultat</h2>

<?php

/*Sur un compte bancaire, on doit pouvoir :
Créditer le compte de X euros
Débiter le compte de X euros
Effectuer un virement d'un compte à l'autre*/
function chargerClasse($classe)
{
    require $classe . '.php';
}
spl_autoload_register('chargerClasse');




$titulaire1 = new Titulaire("nom", "prenom", "1980-05-06", "Ville");
$titulaire2 = new Titulaire("Nom1", "Prenom1", "1998-08-11", "Ville1");

$compte1 = new CompteBancaire("Livret A", 1200, "€", $titulaire2);
$compte2 = new CompteBancaire("PEL", 10000, "€", $titulaire2);
$compte3 = new CompteBancaire("Livret Bleu", 500, "€", $titulaire2);

echo $titulaire1;
echo $titulaire2;

echo $compte1->crediter(50);
echo $compte1->debiter(1200);
echo $compte2->crediter(900);
echo $compte1->virementInterne(100, $compte2);
echo $titulaire2->afficherComptes();

?>