<?php

class CheckBoxField extends HtmlField
{
    protected function isValid($value)
    {
        if(is_bool($value))
        {
            $checked = ($value)?'checked':'';
            $this->field = "<input type='checkbox' name='$this->name' $checked>";
        }
    }
    public function __toString()
    {
        return $this->field;
    }
}