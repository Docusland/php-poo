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
        if ($this->isValid($value)) {
            $this->name = $name;
            $this->value = $value;
        }
    }

    abstract public function __toString();
}