<?php
    include "article.class.php";


echo "Saisir la réference : ";
$ref = trim(fgets(STDIN));

echo "Saisir la désignation: : ";
$des = trim(fgets(STDIN));

echo "Saisir la prix HT : ";
$ht = trim(fgets(STDIN));

echo "Saisir la TVA : ";
$tva = trim(fgets(STDIN));


$Article2 = new Article($ref,$des,$ht);//création de l'objet
$Article2->setTauxTVA($tva);//permet de saisir la variable static
echo $Article2-> AfficherArticle();//on aplique la fonction afficher à l'objet


?>