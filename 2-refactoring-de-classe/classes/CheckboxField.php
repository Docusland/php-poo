<?php

class CheckboxField extends HtmlField {

    protected function isValid($value) {
        if ((!is_bool($value)) || (!$value)) {
            throw new InvalidBoolException('Please enter a boolean');
        }
        return true;
    }
    public function __toString() {
        return "<input type='checkbox' name='$this->name' $this->value>";
    }
}