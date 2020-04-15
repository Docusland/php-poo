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

$form = new Form($action, $method);
$form->addField('name',$name)
    ->addField('min_age',$min_age)
    ->addField('min_players',$min_players)
    ->addField('max_players',$max_players)
    ->addField('is_available', $is_available);

$form->addSubmitButton('Modifier');

echo $form->build();