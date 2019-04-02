<?php
class Recepcion{
    private $name;
    private $email;
    private $sourceRegion;
    private $lenguage;
    private $dateCheckIn;
    private $dateCheckout;
    
    function __construct($name, $email, $sourceRegion, $lenguague, $dateCheckIn, $dateCheckout) {
        $this->name = $name;
        $this->email = $email;
        $this->sourceRegion = $sourceRegion;
        $this->lenguague = $lenguague;
        $this->dateCheckIn = $dateCheckIn;
        $this->dateCheckout = $dateCheckout;
    }
    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getSourceRegion() {
        return $this->sourceRegion;
    }

    function getLenguague() {
        return $this->lenguague;
    }

    function getDateCheckIn() {
        return $this->dateCheckIn;
    }

    function getDateCheckout() {
        return $this->dateCheckout;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSourceRegion($sourceRegion) {
        $this->sourceRegion = $sourceRegion;
    }

    function setLenguague($lenguague) {
        $this->lenguague = $lenguague;
    }

    function setDateCheckIn($dateCheckIn) {
        $this->dateCheckIn = $dateCheckIn;
    }

    function setDateCheckout($dateCheckout) {
        $this->dateCheckout = $dateCheckout;
    }


    
}