<?php

include_once 'HtmlField.php';

class CheckboxField extends HtmlField{

    public function isValid($inputValue){
        if(is_bool($inputValue)){
            return true;
        }
        else{
            return "l'input n'est pas valide"; 
        }
    }
    function __tostring(){
    $checked = ($rhis->fieldValue)?'checked':'';
    return "<input type='checkbox' name='$this->fieldName' $checked>";
    }
}
?>