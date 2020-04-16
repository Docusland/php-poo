<?php 

class TextField extends HtmlField {


    public function __toString()
    {
        "<input type='text' name='$this->name' value='$this->value'>";
        return "<input type='text' name='$this->name' value='$this->value'>";
    }
}

