<?php
    include "compte.class.php";

    echo "Donner Le CIN: ";
    $nom = trim(fgets(STDIN));
    echo "Donner Le Nom: ";
    $prenom = trim(fgets(STDIN));
    echo "Donner Le Prénom: ";
    $cin = trim(fgets(STDIN));
    echo "Donner Le numéro de télephone: ";
    $tel = trim(fgets(STDIN));

    $Compte1 = new Compte($nom, $prenom, $cin, $tel,$nCompte);
    $Compte1->resumeCompte($Compte1);
    echo "Donner la somme à créditer : ";
    $somme = trim(fgets(STDIN));
    $Compte1->crediter($somme);
    $Compte1->resumeCompte($Compte1);
    echo "Donner la somme à débiter : ";
    $somme = trim(fgets(STDIN));
    $Compte1->debiter($somme);
    $Compte1->resumeCompte($Compte1);

    echo "Donner Le CIN: ";
    $nom = trim(fgets(STDIN));
    echo "Donner Le Nom: ";
    $prenom = trim(fgets(STDIN));
    echo "Donner Le Prénom: ";
    $cin = trim(fgets(STDIN));
    echo "Donner Le numéro de télephone: ";
    $tel = trim(fgets(STDIN));
    

    $Compte2 = new Compte($nom, $prenom, $cin, $tel,$nCompte);
    $Compte2->resumeCompte($Compte2);
    $somme = 3000;
    $Compte2->crediterCpt($somme,$Compte1);
    $somme = 1000;
    $Compte1->débiterCpt($somme,$Compte2);

    $Compte1->resumeCompte($Compte1);
    $Compte2->resumeCompte($Compte2);

    //$Compte2->nbCompte(self::$compteur);

    
    echo "Donner Le CIN: ";
    $nom = trim(fgets(STDIN));
    echo "Donner Le Nom: ";
    $prenom = trim(fgets(STDIN));
    echo "Donner Le Prénom: ";
    $cin = trim(fgets(STDIN));
    echo "Donner Le numéro de télephone: ";
    $tel = trim(fgets(STDIN));
    $Compte3 = new Compte($nom, $prenom, $cin, $tel,$nCompte);
    
    echo "Donner Le CIN: ";
    $nom = trim(fgets(STDIN));
    echo "Donner Le Nom: ";
    $prenom = trim(fgets(STDIN));
    echo "Donner Le Prénom: ";
    $cin = trim(fgets(STDIN));
    echo "Donner Le numéro de télephone: ";
    $tel = trim(fgets(STDIN));
    $Compte4 = new Compte($nom, $prenom, $cin, $tel,$nCompte);

    //Compte::nbCompte();
    
?>