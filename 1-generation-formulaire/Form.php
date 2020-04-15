<?php
class Form{
    private $fields=[];
    private $method;
    private $action;
    private $button;

 /*Create a magic thing*/
    public function __construct (String $action, String $method){
        $this->action = $action;
        $this->method = $method;
    }
/*Create a new field*/
    public function addTextField(String $fieldName, String $fieldValue){
        $this->fields[] = "<input type='text' name='$fieldName' value='$fieldValue'>";
        return $this;
    }
    public function addNumberField(String $fieldName, int $fieldValue){
        $this->fields[] = "<input type ='number' name='$fieldName' value='$fieldValue'>";
        return $this;
    }
/*Create a Checkbox*/
    public function addCheckboxField (String $fieldName, bool $fieldValue){
        $checked=($fieldValue)?'checked':'';
        $this->fields[]="<input type='checkbox' name='$fieldName' $checked>";
        return $this;
    }

/*Create a list of options*/
    public function addSelectField(array $options, String $fieldName, int $fieldValue){
        $html ="<select name=$fieldName>";
        foreach ($options as $i=>$option){
            $html .= "<option value ='$i'>$option</option>";
        }
        $html .="</select>";
        $this->fields[] = $html;
        return $this;
    }

/* Create'Submit' button*/
    public function addSubmitButton($text){
        $this->button = "<input type='submit' value='$text'>";
    }

/*Form's recording*/
    public function build(){
        $html="<form action='$this->action' method='$this->method'>";
        foreach($this->fields as $field){
            $html .=$field;
        }
        $html .=$this->button;
        $html .='</form>';
        return $html;

    }
    
}