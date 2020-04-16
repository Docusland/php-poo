<?php

abstract class HtmlField
{
    protected $field;
    protected $name;
    protected $value;

    protected function isValid($value)
    {
        return true;
    }

    public function __construct($name, $value)
    {
        $this->name= $name;
        $this->value = $value;
        if ($this->isValid($value))
        {
            //traiteme ,,,,,,,,,,,,,,,,,,,,,ccvnt html
        }
    }
}