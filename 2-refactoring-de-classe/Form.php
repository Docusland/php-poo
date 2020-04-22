<?php

include_once 'TextField.php';
include_once 'NumberField.php';
include_once 'CheckboxField.php';



class Form{

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
        $this->fields[] = new TextField($fieldName,$fieldValue);
        
    }
    public function addNumberField(String $fieldName, int $fieldValue) 
    {        
        $this->fields[] = new NumberField($fieldName,$fieldValue);

    }
    public function addCheckboxField(String $fieldName, bool $fieldValue)
    {
        
        $this->fields[] = new CheckboxField($fieldName,$fieldValue);

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