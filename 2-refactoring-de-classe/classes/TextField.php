<?php


class TextField extends HtmlField {

    protected function isValid($value) {
        if ((!is_string($value)) || (!$value)) {
            throw new InvalidStringException('Please enter a string');
        }
        if ((strlen($value) < 2) && (strlen($value) > 150)) {
            throw new InvalidStrLenException('Invalid length of string');
        }
        return true;
    }
    public function __toString() {
        return "<input type=\"text\" name=\"".$this->name."\" value=\"".$this->value."\">";
    }
}