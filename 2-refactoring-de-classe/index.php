<?php
include 'Form.php';
/* include 'HtmlField.php';
include 'CheckboxField.php';
include 'NumberField.php';
include 'TextField.php'; */


$action = '#';
$method = 'POST';
$name = 'Pandémie';
$min_age = 14;
$min_players = 2;
$max_players = 4;
$is_available = (bool) true;

$form = new Form($action, $method);

$form->addTextField('name',$name); 
$form->addNumberField('min_age',$min_age);
$form->addNumberField('min_players',$min_players);
$form->addNumberField('max_players',$max_players);
$form->addCheckboxField('is_available', $is_available);

$form->addSelectField([1=>'Mr', 2=>'Mme', 3=>'Other'], 'Choisissez un titre', 3);

$form->addSubmitButton('Modifier');

echo $form->build();