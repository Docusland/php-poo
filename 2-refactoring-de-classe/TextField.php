<?php 
class TextField extends HtmlField{

    public function __toString()
    {
        return "<input type='text' name='$this->name' value='$this->value'>";
    }
}
?>