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

    public function __construct( $data = [] ){
        if ( !empty($data) ) {
            $this->hydrate($data);
        }
    }
    private function hydrate($data) {
        foreach ($data as $key => $value)
        {
            $method = 'set'.str_replace('_', '', ucwords($key, '_')); // replace snake_case to PascalCase

            if (method_exists($this, $method))  // check if setter exists and execute it.
            {
                $this->$method($value);
            }
        }
    }

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName(string $name) {
        if(strlen($name) > 30)
        {
            $this->errors[] = "the name field must be less than 30 characters long";
        } else if(empty($name)) {
            $this->errors[] = "Please set a name";
        }
        $this->name = $name;
        return $this;
    }
    public function getPlayersMin() {
        return $this->players_min;
    }
    public function setPlayersMin(string $players_min) {
        if(!is_numeric($players_min))
        {
            $this->errors[] = "your min players field must be of type int !";
        }
        $this->players_min = $players_min;
        return $this;
    }
    public function getPlayersMax() {
        return $this->players_max;
    }
    public function setPlayersMax(string $players_max) {
        if(!is_numeric($players_max))
        {
            $this->errors[] = "your players max field must be of type int !";
        }
        $this->players_max = $players_max;
        return $this;
    }
    public function getAgeMin() {
        return $this->age_min;
    }
    public function setAgeMin(string $age_min) {
        if(!is_numeric($age_min))
        {
            $this->errors[] = "your min age field must be of type int !";
        }
        $this->age_min = $age_min;
        return $this;
    }
    public function getAgeMax() {
        return $this->age_max;
    }
    public function setAgeMax(string $age_max) {
        if(!is_numeric($age_max))
        {
            $this->errors[] = "your max age field must be of type int !";
        }
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