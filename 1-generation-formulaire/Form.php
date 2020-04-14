<?php

class Form{

    public $action;
    public $method;
    public $fields;
    public $fieldName;
    public $fieldValue;

    function __construct($action,$method){
        $this->action = $action;
        $this->method = $method;
    }

    function addTextField(string $fieldName, string $fieldValue){
        $this->fields[$fieldName] = $fieldValue;
        return $this;
    }

    function addSubmitButton(string $buttonName){
    }

    function build(){
       return 
       '<form action="'.$this->action .'" method="'. $this->method.'">
        <input name="lastname" value="'.$this->fieldName.'" >
        <input name="firstname" value="'.$this->fieldValue.'" >
        <input type="submit" value="Save" >
        </form>';
    }

}