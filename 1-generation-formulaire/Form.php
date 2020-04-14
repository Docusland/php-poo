<?php
class Form{
    private $action;
    private $method;
    private $html;

    public function __construct(string $action, string $method) {
        $this->action = $action;
        $this->method = $method;
        $this->html = $this->addForm();
    }

    private function addForm() {
        return "<form action=\"".$this->action." method=\"".$this->method."\">";
    }

    public function addTextField(string $name, string $value) {
        $this->html .= "<input type=\"text\" name=\"".$name."\" value=\"".$value."\">";
        return $this;
    }
    public function addTextArea(string $name, string $value){
        $this->html .= "<input type=\"textarea\" name=\"".$name."\" value=\"".$value."\">";
        return $this;
    }
    public function addSelectField(array $options) {
        $this->html .= "<select>";
        foreach ($options as  $option) {
            $this->html .= '<option>'.$option.'</option>';
        }
        $this->html .= '</select>';
        return $this;
    }
    public function addRadioButton(string $name, string $value) {
        $this->html .= "<input type=\"radio\" name=\"".$name."\" value=\"".$value."\">";
    }
    public function addSubmitButton($value) {
        $this->html .= "<input type=\"submit\" value=\"".$value."\">";
        return $this;
    }
    public function  build() {
        return $this->html."</form>";
    }
}

// class Validator{
//     private $errMessage;

//     public function __construc(string $errMessage) {
//         $this->errMessage = $errMessage;
//     }
//     public function isValid($fields) {
//         $valid = true;

//         foreach ($fields as field) {
//             if (!$field->isValid()) {
//                 $valid = false;
//             }
//         }
//         return $valid;
//     }
// }