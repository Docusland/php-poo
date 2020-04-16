<?php 

class TextField extends HtmlField{
    protected function isValid($value){
        if(!is_string($value) || strlen($value)<2){
            throw new Exception("'$value' n'est pas bonne.");
        }
        else{
            return true;
        }
    }
    
}

?>