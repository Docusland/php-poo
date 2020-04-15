<?php
include 'Form.php';

// Des variables par défaut pour vos tests.

// YOUR CODE HERE
$action = '#';
$method = 'POST';
$name = 'Pandémie';
$min_age = 14;
$min_players = 2;
$max_players = 4;
$options=["banane", "concombre", "fraises"]; 
$is_available = (bool) true;

$form = new Form($action, $method); 
$form->addTextField('name',$name); 
$form->addNumberField('number', $min_age);
$form->addCheckboxField('bool', $is_available);
$form->addSubmitButton('Save'); 
$form->addSelectField($options, 'fieldName', 0);
echo $form->build(); //permet d'afficher le formulaire 