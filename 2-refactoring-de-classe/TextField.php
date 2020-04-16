<?php

class TextField extends HtmlField
{
    protected function isValid($value)
    {
        if(is_string($value))
        {
            return true;
        }
    }
    public function __toString()
    {
        return $this->field = "<input type='text' name='$this->name' value='$this->value'>";
    }
}