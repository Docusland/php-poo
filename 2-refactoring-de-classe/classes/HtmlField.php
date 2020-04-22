<?php

abstract class HtmlField {
    protected $fieldName;
    protected $fieldValue;

    protected function isValid($value){
        return true;
    }

    public function __construct($name, $value) {
        if ($this->isValid($value)) { 
<<<<<<< HEAD:2-refactoring-de-classe/HtmlField.php
            $this->fieldName= $name;
            $this->fieldValue = $value;
=======
            $this->name= $name;
            $this->value = htmlspecialchars($value);
>>>>>>> upstream/master:2-refactoring-de-classe/classes/HtmlField.php
        }
    }
    abstract public function __toString();
}