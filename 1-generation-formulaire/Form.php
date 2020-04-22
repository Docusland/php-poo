<?php
class Form{
    private $action;
    private $method;
    private $lastname = [];
    private $firstname = [];

    function addTextField(string $lastnames,string $firstnames){
        $this->lastname[] = $lastname;
        $this->firstname[] = $firstname;
        return $this;
    }
    function addSubmitButton(string $lastnames,string $firstnames){
        $this->lastname[] =$lastname;
        $this->firstname[] =$firstname;
        return $this;
    }
    public function __construct($action,$method){
        $this->action = $action;
    }
    public function build(){
        echo $this->action;
    }
}
 




// * Un input text `<input type="text"...>`
// * Un select `<select ...> ...</select>`
// * Un bouton submit `<button type="submit"></button>`
// * Un textarea `<textarea ...> ...</textarea>`
// * Un radio button `<input type="radio"...>`
// * Une méthode build qui permettra de générer le code HTML du formulaire.