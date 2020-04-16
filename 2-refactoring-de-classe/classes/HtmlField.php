<?php
abstract class HtmlField {
    protected $name;
    protected $value;

    protected function isValid($value){
        $valid = true;
        return $valid;
    }

    public function __construct($name, $value) {
        if ($this->isValid($value)) { 
            $this->name= $name;
            $this->value = htmlspecialchars($value);
        } else {
            throw new Exception('Please enter a valid value');
        }
    }
}