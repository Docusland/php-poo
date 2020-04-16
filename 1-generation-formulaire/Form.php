<?php
class Form{
    private $fields = [];
    private $method;
    private $action;
    private $button;

    public function __construct(string $method, string $action)
    {
        $this->method = $method;
        $this->action = $action;
        return $this;
    }

    public function addTextField (string $fieldName, string $fieldValue)
    {
        $this->fields[] = "<input type='text' name='$fieldName' value = '$fieldValue' />";
        return $this;
    }

    public function addSubmitButton (string $modifier)
    {
        $this->button = "<input type = 'submit' value = '$modifier' />";
    }

    public function build ()
    {
        $html = '<form action="'."<?$this->action?>".'"'.' method="'."<? $this->method ?>".'">';
        foreach ($this->fields as $field) {
            $html.=$field;
        }
        $html .= $this->button;
        $html .= '</form>';
        return $html;
    }

    public function addSelectField (string $option, string $nameField, string $valueField)
    {
        foreach ($otpions as $key => $option) {
            # code...
        }
    }
}

