<?php

include 'HtmlField.php';
include 'TextField.php';
include 'NumberField.php';
include 'CheckboxField.php';
class Form
{
    private $fields;
    private $method;
    private $action;
    private $button;

    public function __construct(String $action, String $method)
    {
        $this->action = $action;
        $this->method = $method;
    }
    public function addTextField(String $Name, String $Value)
    {
        $this->fields[] = new TextField($Name, $Value);
        return $this;
    }
    public function addNumberField(String $Name, int $Value)
    {
        $this->fields[] = new NumberField($Name, $Value);
        return $this;
    }

    public function addCheckboxField(String $fieldName, bool $fieldValue)
    {
        $this->fields[] = new CheckboxField($fieldName, $fieldValue);
        return $this;
    }
    public function addSubmitButton($text)
    {
        $this->button = "<input type='submit' value='$text'>";
    }
    /* public function addSelectField(array $options, string $nameField, int $valueField)
    {
        $html = "<select name='$nameField'>";
        foreach ($options as $key => $option) {
            $selected = '';
            if ($key == $valueField) {
                $selected = 'selected';
            }
            $html .= "<option value ='$key' $selected>$option</option>";
        }
        $html .= "</select>";
        $this->field[] = $html;
        return $this;
    } */
    public function build()
    {
        $html = "<form action='$this->action' method='$this->method'>";
        foreach ($this->fields as $field) {
            $html .= $field;
        }
        $html .= $this->button;
        $html .= '</form>';
        return $html;
    }
}