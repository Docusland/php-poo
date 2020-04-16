<?php
class Form extends HtmlField{
    private $action;
    private $method;
    private $fields;
    private $button;

    function __construct(String $action,String $method){
        $this->action = $action;
        $this->method = $method;
    }

    function addTextField($name, $value){
         $this->fields[] = new TextField($name, $value);
    }
    /*function addTextField(string $fieldName ,string $fieldValue){
        $this->fields[] = "<input type = 'text' name = '$fieldName' value = '$fieldValue'>";
        return $this;
    }*/
    function addSubmitButton(String $text){
        $this->button= "<input type = 'submit' value ='$text'>";        
    }
    public function addNumberField(String $fieldName, int $fieldValue) {
        $this->fields[] = "<input type='number' name='$fieldName' value='$fieldValue'>";
        return $this;
    }
    function addCheckboxField(string $fieldName ,string $fieldValue){
        $checked = ($fieldValue)?'checked':'';
        $this->fields[] = "<input type = 'checkbox' name = '$fieldName' $checked>";
        return $this;
    }
    function addSelectField( $options,string  $name , $method){

        $html= "<select name='$name'>";
        foreach ($options as $key => $option){ 
            $html .= "<option value='$key'>
            $option
            </option>";
        }
        $this->fields[] = $html;
        $html .= "</select>";
        return $this;
    }
    
    public function build(){
        
        $html = "<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field){
            $html .= $field;
        }
        $html .= $this->button;
        $html .= '</form>';
        return $html;
    }
}
