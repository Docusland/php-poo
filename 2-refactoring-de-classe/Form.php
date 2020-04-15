<?php
class Form
{
    private $fields;
    private $method;
    private $action;
    private $button;
    private $options;

    public function __construct(String $action, String $method)
    {
        $this->action = $action;
        $this->method = $method;
    }
    public function addTextField(String $fieldName, String $fieldValue)
    {
        $this->fields[] = "<input type='text' name='$fieldName' value='$fieldValue'>";
        return $this;
    }
    public function addNumberField(String $fieldName, int $fieldValue)
    {
        $this->fields[] = "<input type='number' name='$fieldName' value='$fieldValue'>";
        return $this;
    }

    public function addCheckboxField(String $fieldName, bool $fieldValue)
    {
        $checked = ($fieldValue) ? 'checked' : '';
        $this->fields[] = "<input type='checkbox' name='$fieldName' $checked>";
        return $this;
    }
    public function addSubmitButton($text)
    {
        $this->button = "<input type='submit' value='$text'>";
    }
    public function addSelectField(array $options, string $name, int $value){            //fonction selectField, elle permet d'ajouter un menu déroulant
        $value = 0;
        foreach()
        echo "<option value='$value'>$name</option>";                      // on peut spécifier le nom des options avec $name, leur valeur avec $value
        return $this;
    }
    public function build()
    {
        $html = "<form action='$this->action' method='$this->method'>";
        foreach ($this->fields as $field) {
            $html .= $field;
        }
        $html .= $this->button;
        $html .= '</form>';
        $html .= "<select name=''>";
        return $html;
    }
}