<?php
class Form{
    private $action;
    private $method;
    private $lastname =[];
    private $firstname =[];

    function addTextField(string $lastnames ,string $firstnames){
        $this->lastname[] =$lastnames;
        $this->firstname[] =$firstnames;
        return $this;
    }
    function addSubmitButton(string $lastnames ,string $firstnames){
        $this->lastname[] =$lastnames;
        $this->firstname[] =$firstnames;
        return $this;
    }
    public function getlastname(){
        return $this->lastname;
    }
    public function setlastname (string $lastnames){
        $this->lastname = $lastname;
    }
    public function getfirstname(){
        return $this->firstname;
    }
    public function setfirstname (string $firstnames){
        $this->firstname = $firstname;
    }
    public function getaction(){
        return $this->action;
    }
    public function setaction (string $action){
        $this->action = $action;
    }

}