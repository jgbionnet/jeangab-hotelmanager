<?php

namespace App\Model;

class Client
{

    private $id;
    private $firstname;
    private $lastname;
    private $entryDate;
    private $departureDate;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getEntryDate()
    {
        return $this->entryDate;
    }

    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;
    }

    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }
}
