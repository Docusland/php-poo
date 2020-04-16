<?php
class Form{

    private $fields = [];
    private $method;
    private $action;
    private $button;

    public function __construct(String $action, String $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function addTextField(string $name, string $value)
    {
        $this->fields[] = new TextField($name, $value); //mon navigateur m'indique une erreur à cette ligne mais je ne trouve pas l'erreur
        return $this;
    }


    public function addNumberField(String $fieldName, int $fieldValue) {
        $this->fields[] = new NumberField($name, $value);
        return $this;
    }


    public function addCheckboxField(String $fieldName, bool $fieldValue)
    {
        $checked = ($fieldValue)?'checked':'';
        $this->fields[] = new CheckboxField($name, $value);
        return $this;
    }


    public function addSubmitButton($text)
    {
        $this->button = "<input type='submit' value='$text'>";
    }
    
    public function build()
    {
        $html = "<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field){
            $html .= $field;
        }
        $html .= $this->button;
        $html .= '</form>';
        return $html;
    }
}