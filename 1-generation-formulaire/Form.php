<?php
   class Form{
    public $action;
    public $method;
    public $fieldname;
    public $fieldvalue;
 

    function __construct($action, $method){
        $this->action = $action;
        $this->method = $method;
    }

    function addTextField(string $fieldName , string $fieldvalue) {
        $this->fields[$fieldName] =$fieldvalue;
        return $this;
    }

    function addButton()

    function build()
}