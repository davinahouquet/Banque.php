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

// $compte1->crediter(50);

?>