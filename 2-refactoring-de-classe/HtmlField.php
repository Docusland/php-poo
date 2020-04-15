<?php
abstract class HtmlField {
    private $name;
    private $value;

    protected function isValid(){
        return true;
    }

    public function __construct($name, $value) {
        if ($this->isValid()) { 
            $this->name= $name;
            $this->value = $value;
        } else {
            throw new Exception('Please enter a valid value');
        }
    }
}

class TextField extends HtmlField {
    private $name;
    private $value;

    protected function isValid() {
        //a faire
        return true;
    }
    public function __construct($name, $value) {
        if ($this->isValid()) { 
            $this->name= $name;
            $this->value = $value;
        } else {
            throw new Exception('Please enter a valid value');
        }
    }
    public function __toString() {
        return "<input type=\"text\" name=\"".$this->name."\" value=\"".$this->value."\">";
    }
}

class NumberField extends HtmlField {
    private $name;
    private $value;

    protected function isValid() {
        //a faire
        return true;
    }
    public function __construct($name, $value) {
        if ($this->isValid()) { 
            $this->name = $name;
            $this->value = $value;
        } else {
            throw new Exception('Please enter a valid value');
        }
    }
    public function __toString() {
        return "<input type=\"text\" name=\"".$this->name."\" value=\"".$this->value."\">";
    }
}

class CheckboxField extends HtmlField {
    private $name;
    private $value;

    protected function isValid() {
        //a faire
        return true;
    }
    public function __construct($name, $value) {
        if ($this->isValid()) { 
            $this->name= $name;
            $this->value = ($value)?'checked':'';
        } else {
            throw new Exception('Please set a value');
        }
    }
    public function __toString() {
        return "<input type='checkbox' name='$this->name' $this->value>";
    }
}