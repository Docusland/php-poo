<?php

class CheckboxField extends HtmlField {

    protected function isValid($value) {
        if ((!is_bool($value)) || (!$value)) {
            $valid = false;
        }
        $valid = true;
        return $valid;
    }
    public function __toString() {
        return "<input type='checkbox' name='$this->name' $this->value>";
    }
}