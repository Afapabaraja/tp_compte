<?php

class Client {
    private $_cin;
    private $_nom;
    private $_prenom;
    private $_tel;
    

public function __construct($nom, $prenom, $cin, $tel)
{
 $this->_cin = $cin;
 $this->_nom = $nom;
 $this->_prenom = $prenom;
 $this->_tel = $tel;
}

public function afficher()
{
    echo "Le CIN: ".$this->_cin."\n";
    echo "Le Nom:: ".$this->_nom."\n";
    echo "Le Prénom: ".$this->_prenom."\n";
    echo "Le numéro de télephon: ".$this->_tel."\n";

}


/////////////////////////////GETTERS && SETTERS//////////////////////////
    /**
     * Get the value of _cin
     */ 
    public function get_cin()
    {
        return $this->_cin;
    }

    /**
     * Set the value of _cin
     *
     * @return  self
     */ 
    public function set_cin($_cin)
    {
        $this->_cin = $_cin;

        return $this;
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _tel
     */ 
    public function get_tel()
    {
        return $this->_tel;
    }

    /**
     * Set the value of _tel
     *
     * @return  self
     */ 
    public function set_tel($_tel)
    {
        $this->_tel = $_tel;

        return $this;
    }
}

?>