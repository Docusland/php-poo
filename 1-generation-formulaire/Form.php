<?php

    class Form{
        public $action;
        public $method;
        public $fieldname;
        public $fieldvalue;
        public $button;

     
    
        public function __construct(Action $action, Method $method){
            $this->action = $action;
            $this->method = $method;
        }

        public function addTextField(string $fieldname, string $fieldvalue){
            $this->fields[$fieldname]=$fieldvalue; 
        }

        public function addSubmitButton(){
            $this->button='<input type='text''name'=".$field."

        }
        
        public function build (){

        }
    }

    class Field{
        private $textfield;
        private $numberfield;
    }
    
   
?>