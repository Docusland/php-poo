<?php

class NumberField extends HtmlField
{
    protected function isValid($value)
    {
        if(is_integer($value))
        {
            return true;
        }
    }
    public function __toString()
    {
        return "<input type='text' name='$this->name' value='$this->value'>";
    }
}