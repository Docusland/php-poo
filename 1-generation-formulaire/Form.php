<?php

class Form{

    public $action;
    public $method;
    public $fields;

    function __construct($action,$method){
        $this->action = $action;
        $this->method = $method;
    }

    function addTextField(string $fieldName, string $fieldValue){
        $this->fields[$fieldName] = $fieldValue;
        return $this;
    }

}