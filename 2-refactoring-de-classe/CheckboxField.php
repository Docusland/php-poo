<?php 
class CheckboxField extends HtmlField
{
    public function addCheckboxField(String $fieldName, bool $fieldValue)
    {
        $checked = ($fieldValue)?'checked':'';
        return "<input type='checkbox' name='$fieldName' $checked>";
    }
}





?>