.<?php
class Form{
private $action;
private $method;
private $fieldName;
private $fieldValue; 

function __construct($action,$method){ //plus rapide
    $this->action = $action;
    $this->method = $method;
}


//créer un input avec $nom par défaut

function addTextField(string $fieldName ,string $fieldValue){
    $this->fields[$fieldName] = $fieldValue;
    return $this;
}
/*
function addSubmitButton(string $lastnames ,string $firstnames){
    
}
public function build(){
    echo $this->action;
    echo $this->method;
}*/
}