<?php
    include 'classes/Form_2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
    <style>
        .error{
            color:red;
            font-weight: bold;
        }
    </style>
</head>
<body>


<?php

// YOUR CODE HERE
$action = '#';
$method = 'POST';
$name = 'Pandémie';
$min_age = 14;
$min_players = 2;
$max_players = 4;
$is_available = (bool) true;

$form = new Form($action, $method);
try {
$form->addTextField('name',$name); 
$form->addNumberField('min_age',$min_age);
$form->addNumberField('min_players',$min_players);
$form->addNumberField('max_players',$max_players);
$form->addCheckboxField('is_available', $is_available);
$form->addSubmitButton('Modifier');
} catch (Exception\FormException $e) {
    echo "<span class='error'>", $e->getMessage(), "</span>";
}

echo $form->build();


?>