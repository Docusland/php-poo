<?php
class Formulaire{
    public $lastname;
    public $firstname;
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
        if ($field == 'lastname')
        {
            $this->lastname = '<input type=\'text\' name="'."$field".'"'.'value="'."$value".'">';
        }
        if ($field == 'firstname')
            $this->firstname = '<input type=\'text\' name="'."$field".'"'.'value="'."$value".'">';

    }
    public function addSubmitButton($text)
    {
        $this->button = '<input type="submit" value="'."$text".'">';
    }
    public function build()
    {
        return '<form action="'."<?$this->action?>".'"'.' method="'."<? $this->method ?>".'">'
                      ."$this->lastname"
                      ."$this->firstname"
                      ."$this->button"
                      .'</form>';
    }
}
