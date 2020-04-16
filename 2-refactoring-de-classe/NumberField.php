<?php 

class NumberField extends HtmlField{

    public function __toString() {
        "<input type='number' name='$this->name' value='$this->value'>";
        return "<input type='number' name='$this->name' value='$this->value'>";
    }

}
?>