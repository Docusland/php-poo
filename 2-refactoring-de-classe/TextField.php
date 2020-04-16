<?php

include_once 'HtmlField.php';

class TextField extends HtmlField{

    public function isValid($inputValue){
        if(is_string($inputValue)){
            return true;
        }
        else{
            return "l'input n'est pas valide"; 
        }
    }
    function __tostring(){
    return "<input type='text' name='$this->fieldName' value='$this->fieldValue'>";
    }
}
?>