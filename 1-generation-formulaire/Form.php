<?php
class Form{
    private $action;
    private $method;
    private $fieldName;
    private $fieldValue;

    function __construct($action,$method){
        $this->action = $action;
        $this->method = $method;
    }

    function addTextField(string $fieldName ,string $fieldValue){
        $this->fields[$fieldName] = $fieldValue;
        return $this;
    }
    function addSubmitButton(string $lastnames ,string $firstnames){
        
    }
    public function build(){
        echo $this->action;
        echo $this->method;
    }
}