<?php

include_once 'HtmlField.php';

class NumberField extends HtmlField{

    public function isValid($inputValue){
        if(is_int($inputValue)){
            return true;
        }
        else{
            return "l'input n'est pas valide"; 
        }
    }
    function __tostring(){
    return "<input type='number' name='$this->$fieldName' value='$this->fieldValue'>";
    }
}
?>

