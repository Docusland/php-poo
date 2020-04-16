<?php
include 'classes/Form.php';

// YOUR CODE HERE
$action = '#';
$method = 'POST';
$name = 'Pandemie';
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
} catch (InvalidStringException $e) {
    echo "<span style='color:red'><strong>Please enter a valid word without stranger character</strong></span>";
} catch (InvalidStrLenException $e) {
    echo "<span style='color:red'><strong>Please enter a shorter or longer word</strong></span>";
} catch (InvalidIntException $e) {
    echo "<span style='color:red'><strong>Please enter a valid number</strong></span>";
} catch (PositiveIntException $e) {
    echo "<span style='color:red'><strong>Please enter a positive number</strong></span>";
} catch (InvalidBoolException $e) {
    echo "<span style='color:red'><strong>Erreur bizarre qui n'a rien a voir avec vous desole du derangement bisous</strong></span>";
}
echo $form->build();