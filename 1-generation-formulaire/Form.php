<?php

class Form{

    public $action;
    public $method;
    public $fields;
    public $button;
    public $Select;

    function __construct(string $action,string $method){
        $this->action = $action;
        $this->method = $method;
    }

    function addTextField(string $fieldName, string $fieldValue){
        $this ->fields[]= "<input type ='text' name='$fieldName' value='$fieldValue'>";
        return $this;
    }
    function addNumberField(string $fieldName,string $fieldValue){
        $this->fields[] ="<input type='number' name='$fieldName' Value='$fieldValue'>";
    }

    function addCheckboxField(string $fieldName, bool $fieldValue){
        $checked = ($fieldValue)?'checked':'';
        $this->fields[]="<input type='checkbox' name='$fieldName' $checked>";
        return $this;
    }

    function addSubmitButton($nameButton){
        $this->button ="<input type='submit'value='$nameButton'>";
    }
    
    function addSelectField($SelectOption){
        $compteur =0;
        foreach($SelectOption as $Option){
            $this->Select[]="<option value='$compteur'>$Option</option>";
            $compteur++;
        }
    }

    function build(){
        $html = "<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field) {
            $html .= $field;
        }
        $html .="<select name=Select>";
        foreach($this->Select as $select) {
            $html .= $select;
        }
        $html .="</select>";
        
        $html .=$this->button;
        $html .='</form>';
        return $html;
    }


}  

