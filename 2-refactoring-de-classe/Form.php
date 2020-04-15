<?php
include 'HtmlField.php';

class Form{

    private $fields;
    private $method;
    private $action;
    private $button;

    public function __construct(String $action, String $method)
    {
        $this->action = $action;
        $this->method = $method;
    }
    public function addTextField(String $name, String $value)
    {
        $this->fields[] = new TextField($name, $value);
        return $this;
    }
    public function addNumberField(String $name, int $value) {
        $this->fields[] = new NumberField($name, $value);
        return $this;
    }

    public function addCheckboxField(String $name, bool $value)
    {
        $this->fields[] = new CheckboxField($name, $value);
        return $this;

    }
    public function addSubmitButton($text)
    {
        $this->button = "<input type='submit' value='$text'>";
    }
    public function build()
    {
        $html = "<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field){
            $html .= $field;
        }
        $html .= $this->button;
        $html .= '</form>';
        return $html;
    }
}