<?php
//création de la calsse avec ses attributs
class Article{
    private $Reference;
    private $Désignation;
    private $PrixHT;
    static $TauxTVA;//Variable TVA declarer comme static parcqu'elle ne change pas
    //constructeur initialisant 3 attributs
    public function __construct($ref,$des,$ht)
    {
        $this->Reference = $ref;
        $this->Désignation = $des;
        $this->PrixHT = $ht;
        self::$TauxTVA;//les valeurs statics sont rappelées de cet facon (self::)
    }
    //fonction permettant de calculer le prix TTC
    public function CalculerPrixTTC()
    {
        $Calcule = $this ->PrixHT + ($this ->PrixHT*(self::$TauxTVA/100));
        return $Calcule;
    }
    //fonction d'affichage
    public function AfficherArticle()
    {
        echo "Référence : ".$this ->Reference."\n";
        echo "Désignation : ".$this ->Désignation."\n";
        echo "PrixHT : ".$this ->PrixHT."\n";
        echo "TauxTVA : ".self::$TauxTVA."\n";
        echo "Le prix TTC est : ".$this->CalculerPrixTTC();
    }
    /**
     * Get the value of Reference
     */ 
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * Set the value of Reference
     *
     * @return  self
     */ 
    public function setReference($Reference)
    {
        $this->Reference = $Reference;

        return $this;
    }

    /**
     * Get the value of Désignation
     */ 
    public function getDésignation()
    {
        return $this->Désignation;
    }

    /**
     * Set the value of Désignation
     *
     * @return  self
     */ 
    public function setDésignation($Désignation)
    {
        $this->Désignation = $Désignation;

        return $this;
    }

    /**
     * Get the value of PrixHT
     */ 
    public function getPrixHT()
    {
        return $this->PrixHT;
    }

    /**
     * Set the value of PrixHT
     *
     * @return  self
     */ 
    public function setPrixHT($PrixHT)
    {
        $this->PrixHT = $PrixHT;

        return $this;
    }

    /**
     * Get the value of TauxTVA
     */ 
    public function getTauxTVA()
    {
        return $this->TauxTVA;
    }

    /**
     * Set the value of TauxTVA
     *
     * @return  self
     */ 
    public function setTauxTVA($TauxTVA)
    {
        self::$TauxTVA = $TauxTVA;

        return self::$TauxTVA;
    }
}