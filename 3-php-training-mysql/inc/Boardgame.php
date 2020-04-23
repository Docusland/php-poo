<?php

class Boardgame {
    
    private $id;
    private $name;
    private $players_min;
    private $players_max;
    private $age_min;
    private $age_max;
    private $picture;
    private $errors = [];

    public function __construct(array $data = []){
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $attribut => $value) {
            $method = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));
            if (is_callable(array($this, $method))) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    public function setName(string $name) {
        if(strlen($name) > 30)
        {
            $this->errors[] = "the name field must be less than 30 characters long";
        }
        $this->name = $name;
        return $this;
    }
    public function getMinPlayers() {
        return $this->players_min;
    }
    public function setMinPlayers(string $players_min) {
        if(!is_numeric($players_min))
        {
            $this->errors[] = "your min players field must be of type int !";
        }
        $this->players_min = $players_min;
        return $this;
    }
    public function getMaxPlayers() {
        return $this->players_max;
    }
    public function setMaxPlayers(string $players_max) {
        if(!is_numeric($players_max))
        {
            $this->errors[] = "your players max field must be of type int !";
        }
        $this->players_max = $players_max;
        return $this;
    }
    public function getMinAge() {
        return $this->age_min;
    }
    public function setMinAge(string $age_min) {
        if(!is_numeric($age_min))
        {
            $this->errors[] = "your min age field must be of type int !";
        }
        $this->age_min = $age_min;
        return $this;
    }
    public function getMaxAge() {
        return $this->age_max;
    }
    public function setMaxAge(string $age_max) {
        $this->age_max = $age_max;
        return $this;
    }
    
    public function getPicture() {
        return $this->picture;
    }
    public function setPicture(string $picture) {
        $this->picture = $picture;
        return $this;
    }
    public function getErrors()
    {
        return $this->errors;
    }
}