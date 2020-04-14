<?php
class Form{
    public $action;
    public $method;
    public $nom;
    public $prenom;


    public function __construct($action, $method) {
        $this->action = $action;
        $this->method = $method;
        $this->html = $this->addForm();
    }

    public function addForm() 
   {
       return "<form action=''.$this->action.'method=''.$this->method.''>";
   }

    public    function addTextField(string $name, string $value){
        $this->html .="<input type='text' name='' .$name.'' value=''.$value.''>";
        return $this;
    }

    public function build() {
        return $this->html."</form>";
    }

}