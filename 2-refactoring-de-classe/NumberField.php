<?php 
class NumberField extends HtmlField
{
    public function addNumberField(String $fieldName, int $fieldValue)
    {
        return "<input type='number' name='$fieldName' value='$fieldValue'>";
    }
}

?>