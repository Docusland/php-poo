<?php
class Form{
    private $action;
    private $method;
    private $fields = [];
    private $button;

    public function __construct($action,$method){
        $this->action = $action;
        $this->method = $method;
    }
    public function addSubmitButton($fields){
        $this->button = "<input type='submit' value='$fields'>";
    }
    public function addTextField(string $fieldName,string $fieldValue){
        $this->fields []= "<input type='text' name ='$fieldName' value ='$fieldValue'>";
        return $this;
    }
    public function addNumberField(string $fieldName,string $fieldValue){
        $this->fields []= "<input type='number' name ='$fieldName' value ='$fieldValue'>";
        return $this;
    }
    public function addCheckboxField(String $fieldName, bool $fieldValue)
    {
        $checked = ($fieldValue)?'checked':'';
        $this->fields[] = "<input type='checkbox' name='$fieldName' $checked>";
        return $this;
    }
    public function addSelectField($options,string $fieldName,string $fieldValue){
        $select ="<select id='title' name='$fieldName'>";
        foreach($options as $option){
            $select.= "<option value='$fieldValue' selected>'$option'</option>";
        }
        $this->fields[] = $select;
        $select.= "</select>";
        return $this;
    }

    public function build(){
        $builder ='<form action="<?php $this->action ?>" method="<?php $this->method?>">';
        foreach ($this->fields as $field) {
            $builder.=$field;
        }
        $builder .= $this->button;
        $builder .= "</form>";
        return $builder;
    }
}

// $form = new Form(1,2);
// $form->addSubmitButton("salut");
// $form->addTextField('sknskn',3);
// $form ->addNumberField('nkend',1);
// echo $form->build();

// * Un input text `<input type="text"...>`
// * Un select `<select ...> ...</select>`
// * Un bouton submit `<button type="submit"></button>`
// * Un textarea `<textarea ...> ...</textarea>`
// * Un radio button `<input type="radio"...>`
// * Une méthode build qui permettra de générer le code HTML du formulaire.