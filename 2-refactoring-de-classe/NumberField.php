<?php 
class NumberField {
    private $Name;
    private $Value;

    public function addNumberField(String $Name, int $Value) {
        $this->fields[] = "<input type='number' name='$Name' value='$Value'>";
        return $this;
    }
}
?>