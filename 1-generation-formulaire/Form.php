<?php
class Formulaire{
    public $fields = [];
    public $method;
    public $action;
    public $button;

    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }
    public function addTextField($field, $value)
    {
            $this->fields[] = '<input type=\'text\' name="'."$field".'"'.'value="'."$value".'">';

    }
    public function addSubmitButton($text)
    {
        $this->button = '<input type="submit" value="'."$text".'">';
    }
    public function build()
    {
        $form = '<form action="'."<?$this->action?>".'"'.' method="'."<? $this->method ?>".'">';
        echo   $form;
        foreach ($this->fields as $field)
        {
            echo $field;
            echo "<br>";
        }
        echo $this->button;
        echo '</form>';
    }
}
