<?php
include 'HtmlField.php';
include 'TextField.php';
include 'NumberField.php';
include 'CheckBoxField.php';


class Form
{
    private $fields = [];
    private $method;
    private $action;
    private $button;

    public function __construct(String $action, String $method)
    {
        $this->action = $action;
        $this->method = $method;
    }
    public function addTextField(String $fieldName, String $fieldValue)
    {
        $this->fields[] = new TextField($fieldName, $fieldValue);
        return $this;
    }
    public function addNumberField(string $fieldName, int $fieldValue)
    {
        $this->fields[] = new NumberField($fieldName, $fieldValue);
        return $this;
    }
    public function addCheckBoxField(string $fieldName, bool $fieldValue)
    {
        $this->fields[] = new CheckBoxField($fieldName, $fieldValue);
        return $this;
    }
    public function addSubmitButton($BouttonValue)
    {
        $this->button = "<input type='submit' value='$BouttonValue'>";
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
