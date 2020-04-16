<?php
include 'Form.php';

// YOUR CODE HERE
$action = '#';
$method = 'POST';
$name = 'Pandémie';
$min_age = 14;
$min_players = 2;
$max_players = 4;
$is_available = (bool) true;
$options = ['Bernard ','jean-claude','yves' , 'Antoine' , 'Didier' , 'Anne-Lise'];


$form = new Form($action, $method);
$form->addTextField('name',$name); 
$form->addNumberField('min_age',$min_age);
$form->addNumberField('min_players',$min_players);
$form->addNumberField('max_players',$max_players);
$form->addCheckboxField('is_available', $is_available);

$form->addSubmitButton('Modifier');
$form->addSelectField($options, $name , $method);


echo $form->build();