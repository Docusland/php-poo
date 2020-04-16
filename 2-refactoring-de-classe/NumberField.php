<?php 
class NumberField extends HtmlField{

    public function __toString()
    {
        return "<input type='number' name='$this->name' value='$this->value'>";
    }
}
