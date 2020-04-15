<?php
class Form extends html {

    private $fields = [];
    private $method;
    private $action;
    private $button;

    public function __construct(String $action, String $method)
    {
        $this->action = $action;
        $this->method = $method;
    }
    public function addField(String $fieldName, String $fieldValue)
    {
        $this->fields[] .= new html($fieldName, $fieldValue);
        return $this;
    }
    public function addSubmitButton($text)
    {
        $this->button = "<input type='submit' value='$text'>";
    }
    public function build()
    {
        echo "<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field){
            echo $field;
        }
        $html = $this->button;
        $html .= '</form>';
        echo $html;
    }
}

class html
{
    private $field;

    public function __construct(string $fieldName, $fieldValue) // détermine le type de champ et rempli $field en fonction ..
                                                                // pas terminé manque l'implémentatioin du boutton et le découpage en méthodes.
    {
        if (is_integer($fieldValue)) {
            $this->field = "<input type='text' name='$fieldName' value='$fieldValue'>";
        } elseif (is_string($fieldValue)) {
            $this->field = "<input type='text' name='$fieldName' value='$fieldValue'>";
        }
        elseif (is_bool($fieldValue))
        {
            $checked = ($fieldValue)?'checked':'';
            $this->fields = "<input type='checkbox' name='$fieldName' $checked>";
        }
    }
    public function __toString()
    {
        return $this->field;
    }
}