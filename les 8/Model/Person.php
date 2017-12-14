<?php
class Person {
    private $voornaam;
    private $familienaam;
    private $lijst;

    function __construct() {
        $lijst = array();
    }

    public function setVoornaam($value) {
        $this->voornaam = $value;
    }

    public function setFamilienaam($value) {
        $this->familienaam = $value;
    }

    public function getVoornaam() {
        return $this->voornaam;
    }

    public function getFamilienaam() {
        return $this->familienaam;
    }

    public function getLijst() {
        return $this->lijst;
    }

    public function voegToeAanDeLijst($person) {
        $this->lijst[] = $person;
    }
}