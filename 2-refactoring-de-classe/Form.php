<?php

include 'HtmlField.php';
include 'TextField.php';
include 'NumberField.php';
include 'CheckboxField.php';

class Form{
    /*protected $fieldName;
    protected $fieldValue;*/
    protected $fields=[];
    private $method;
    private $action;
    private $button;

 /*Create a magic thing*/
    public function __construct (String $action, String $method){
        $this->action = $action;
        $this->method = $method;
    }

    private function addField(HtmlField $field) {
        $this->fields[] = $field;
        return $this;
      }
      public function addTextField($name, $value){
        return $this->addField(new TextField($name, $value));
      }
/*Create a new field*/
    public function addTextField($name, $value){
        $this->addField (new TextField($name, $value));
        return $this;
    }
    public function addNumberField($name, $value){
        $this->addField(new NumberField($name, $value);
        return $this;
    }
/*Create a Checkbox*/
    public function addCheckboxField ($name, $value){
        $this->fields[]=new CheckboxField ($name, $value);
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