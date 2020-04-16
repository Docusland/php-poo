<?php

abstract class HtmlField {
    protected $fieldName;
    protected $fieldValue;

    private function isValid($value){
        return true;
    }

    public function __construct($name, $value) {
        if ($this->isValid($value)) { 
            $this->fieldName= $name;
            $this->fieldValue = $value;
        }
    }
}
