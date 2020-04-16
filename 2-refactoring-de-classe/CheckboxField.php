<?php 
class CheckboxField extends HtmlField{

    public function __toString()
    {
        return "<input type='checkbox' name='$this->name'>";
    }
}
