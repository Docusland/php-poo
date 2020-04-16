<?php
include 'HtmlField.php';
include 'TextField.php';
include 'NumberField.php';
include 'CheckboxField.php';

class Form extends HtmlField{

    protected $fields;
    private $method;
    private $action;
    private $button;

    public function __construct(String $action, String $method)
    {
        $this->action = $action;
        $this->method = $method;
    }
    private function addField(HtmlField $field) {
        $this->fields[] = $field;
        return $this;
    }
    public function addTextField(String $name, String $value){
        return $this->addField(new TextField($name,$value));
    }
    public function addNumberField($name ,$value) {
        return $this->addField(new NumberField($name, $value));   
    }

    public function addCheckboxField($name ,$value)
    {
        return $this->addField ( new CheckboxField($name, $value));
    }

    public function addSubmitButton($text)
    {
        $this->button = "<input type='submit' value='$text'>";
    }
    function addSelectField( $options,string  $name , $method){

        $html= "<select name='$name'>";
        foreach ($options as $key => $option){ 
            $html .= "<option value='$key'>
            $option
            </option>";
        }
        $this->fields[] = $html;
        $html .= "</select>";
        return $this;
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