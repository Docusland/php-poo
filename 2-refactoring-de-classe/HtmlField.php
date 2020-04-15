<?php
abstract class HtmlField {
    private $name;
    private $value;

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

class TextField extends HtmlField {
    private $name;
    private $value;

    protected function isValid($value) {
        $valid = true;
        if ((!is_string($value)) || (!$value)) {
            $valid = false;
        }
        if ((strlen($value) < 2) && (strlen($value) > 150)) {
            $valid = false;
        }
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
    public function __toString() {
        return "<input type=\"text\" name=\"".$this->name."\" value=\"".$this->value."\">";
    }
}

class NumberField extends HtmlField {
    private $name;
    private $value;

    protected function isValid($value) {
        $valid = true;
        if ((!is_numeric($value)) || (!$value)) {
            $valid = false;
        }
        if ($this->value < 0) {
            $valid = false;
        }
        return $valid;
    }
    public function __construct($name, $value) {
        if ($this->isValid($value)) { 
            $this->name = $name;
            $this->value = htmlspecialchars($value);
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

    protected function isValid($value) {
        if ((!is_bool($value)) || (!$value)) {
            $valid = false;
        }
        $valid = true;
        return $valid;
    }
    public function __construct($name, $value) {
        if ($this->isValid($value)) { 
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