<?php 

class CheckboxField extends HtmlField{

    public function __toString()
    {
        $checked = ($this->value)?'checked':'';
        "<input type='checkbox' name='$this->name' $checked>";
        return "<input type='checkbox' name='$this->name' $checked>";;

    }
}
?>