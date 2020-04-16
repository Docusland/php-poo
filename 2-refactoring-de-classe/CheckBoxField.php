<?php

class CheckBoxField extends HtmlField
{
    protected function isValid($value)
    {
        if(is_bool($value))
        {
            return true;
        }
    }
    public function __toString()
    {
        $checked = ($this->value)?'checked':'';
        return $this->field = "<input type='checkbox' name='$this->name' $checked>";
    }
}