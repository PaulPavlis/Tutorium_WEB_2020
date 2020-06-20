<?php

class Produkt
{
    public $ID = null;
    public $Name = null;
    public $Preis = null;
    public $Beschreibung = null;
    public $Bewertung = null;

    public function __construct($ID, $Name, $Preis, $Beschreibung, $Bewertung)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Preis = $Preis;
        $this->Beschreibung = $Beschreibung;
        $this->Bewertung = $Bewertung;
    }
}

// $myObject = new Produkt(1, "Test", 20, "Test Artikel", 3);

// echo "Name: " . $myObject->Name;
