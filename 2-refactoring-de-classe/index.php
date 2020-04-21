<?php
include_once 'Form.php';

    $action = '#';
    $method = 'POST';
    $name = 'a';
    $min_age = 14;
    $min_players = 2;
    $max_players = 4;
    $is_available = (bool) true;

    $form = new Form($action, $method);
    try {
    $form->addTextField('name',$name)
    ->addNumberField('min_age',$min_age)
    ->addNumberField('min_players',$min_players)
    ->addNumberField('max_players',$max_players)
    ->addCheckboxField('is_available', $is_available)
    ->addSubmitButton('Modifier');
    } catch (Exception\FormException $e) {
        echo "<span class='error'>", $e->getMessage(), "</span>";
    }
    echo $form->build();
?>
