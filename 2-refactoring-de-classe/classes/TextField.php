<?php


class TextField extends HtmlField {

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
    public function __toString() {
        return "<input type=\"text\" name=\"".$this->name."\" value=\"".$this->value."\">";
    }
}