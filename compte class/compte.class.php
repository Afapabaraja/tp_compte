<?php
include 'client.class.php';

class Compte{
    private $_nCompte;
    private $_solde;
    private $_client;
    private static $compteur = 1;
        
    public function __construct($nom, $prenom, $cin, $tel,$nCompte) 
    {
        $this->_client = new Client($nom, $prenom, $cin, $tel);
        $this->_solde;
        $this->_nCompte = self::$compteur;
        self::$compteur++;
    }

    public function crediter($somme)
    {
        $sommePrecedent = $this->_solde;
        $sommePrecedent = $sommePrecedent + $somme;
        if($this->_solde < $sommePrecedent){
            $this->_solde = $sommePrecedent;
            echo "Opération bien effectuée \n";
        }else{
            echo "Echec:Montant non credité! \n";
        }
    }
    
    public function crediterCpt($somme,$Compte)
    {
        $this->crediter($somme);
        $Compte->debiter($somme);
    }
    
    public function debiter($somme)
    {
        $sommePrecedent = $this->_solde;
        $sommePrecedent = $sommePrecedent - $somme;
        if($this->_solde > $sommePrecedent){
            $this->_solde = $sommePrecedent;
            echo "Opération bien effectuée";
        }else{
            echo "Echec:Montant non retiré!";
        }
    }

    public function débiterCpt($somme,$Compte)
    {
        $this->debiter($somme);
        $Compte->crediter($somme);
    }

    public function resumeCompte($Compte)
    {
        echo "Numéro de Compte: ".$Compte->get_nCompte()."\n";
        echo "Solde du compte: ".$Compte->get_solde()."\n";
        echo "Propriétaire du compte:\n";
        ($Compte-> get_client())->afficher();
        
    }
    
    public function nbCompte()
    {
        echo "Le nombre de comptes crées: ".self::$compteur."\n";
    }
    
    


///////////////GETTERS AND SETTERS /////////////////
    /**
     * Get the value of _nCompte
     */ 
    public function get_nCompte()
    {
        return $this->_nCompte;
    }


    /**
     * Get the value of _solde
     */ 
    public function get_solde()
    {
        return $this->_solde;
    }

    /**
     * Get the value of _client
     */ 
    public function get_client()
    {
        return $this->_client;
    }

    /**
     * Set the value of _client
     *
     * @return  self
     */ 
    public function set_client($_client)
    {
        $this->_client = $_client;

        return $this;
    }

    /**
     * Get the value of compteur
     */ 
    public function getCompteur()
    {
        return self::$compteur;
    }

    /**
     * Set the value of compteur
     *
     * @return  self
     */ 
    public function setCompteur($compteur)
    {
        self::$compteur = $compteur;

        return $this;
    }
///////////////GETTERS AND SETTERS /////////////////
}

?>