<?php

class NumberField extends HtmlField {

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
    public function __toString() {
        return "<input type=\"text\" name=\"".$this->name."\" value=\"".$this->value."\">";
    }
}