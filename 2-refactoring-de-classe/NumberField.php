<?php
/*To include HTML from NumberField into Form*/
class NumberField extends HtmlField{
    public function __toString(){
        "<input type ='number' name='$this->name' value='$this->value'>";
        return  "<input type ='number' name='$this->name' value='$this->value'>";
    }

    }

?>