<?php 
class NumberField {
    private $Name;
    private $Value;

    public function addCheckboxField(String $Name, bool $Value)
    {
        $checked = ($Value)?'checked':'';
        $this->fields[] = "<input type='checkbox' name='$Name' $checked>";
        return $this;

    }
}
?>