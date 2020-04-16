<?php

class NumberField extends HtmlField {

    protected function isValid($value) {
        if ((!is_numeric($value)) || (!$value)) {
            throw new InvalidIntException('Please enter a integer');
        }
        if ($this->value < 0) {
            throw new PositiveIntException('Value must be positive');
        }
        return true;
    }
    public function __toString() {
        return "<input type=\"text\" name=\"".$this->name."\" value=\"".$this->value."\">";
    }
}