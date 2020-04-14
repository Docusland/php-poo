<?php

class Form{

    public $action;
    public $method;
    public $fields;
    public $fieldName;
    public $fieldValue;

    function __construct($action,$method){
        $this->action = $action;
        $this->method = $method;
    }

    function addTextField(string $fieldName, string $fieldValue){
        $this->fields[$fieldName] = $fieldValue;
        return $this;
    }

    function addSubmitButton(string $buttonName){
    }

    function build(){
        $html = '<form action="'.$this->action .'" method="'. $this->method.'">';
        foreach($this->fields as $key => $value) {
            $html .= "<input name='$key' value='$value' >";
        }
        $html.='<input type="submit" value="Save">';
        $html .='</form>';
        return $html;
    



        
        
}
    }

