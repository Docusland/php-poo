<?php
   class Form{
    private $action;
    private $method;
    private $fields;
    private $button;
 

    function __construct($action, $method){ //build the beginning of the form
        $this->action = $action;
        $this->method = $method;
    }

    public function addTextField(string $fieldName , string $fieldValue) { //case which contain a text
        $this->fields[] = "<input type='text' name='$fieldName', value ='$fieldValue'>";
        return $this;
    }

    public function addNumberField(string $fieldName, int $fieldValue) { //case which contain a number
        $this->fields[] = "<input type='number' name='$fieldName', value='$fieldValue'>";
        return $this;
    }

    public function addCheckboxField(string $fieldName, bool $fieldValue) { //a checkbox
        $checked = ($fieldValue)?'checked':'';
        $this->fields[] = "<input type='checkbox' name='$fieldName' $checked>";
        return $this;        
    }

    public function addSelectField(array $options,string $fieldName,int $fieldValue) { //create a dropdown
        $html ="<select name = $fieldName>";
        foreach ($options as $key => $option) { //for each things in array put them in option 
            $html .= "<option value='$key'>$option</option>";
        }
        $html .= "</select>"; 
        $this->fields[] = $html;
        return $this;
    }
    
    public function addSubmitButton($text) //send button
        {
            $this->button = "<input type='submit' value='$text'>";
        }

    function build() { //build the form
        $html = "<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field) {
            $html .= $field;
        }
        $html .= $this->button;
        $html .= '</form>';
        return $html;
    }
}
