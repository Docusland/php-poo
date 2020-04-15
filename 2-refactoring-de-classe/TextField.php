<?php 
class TextField {
    private $Name;
    private $Value;

    public function addTextField(String $Name, String $Value)
    {
        $this->fields[] = "<input type='text' name='$Name' value='$Value'>";
        return $this;
    }
}
?>