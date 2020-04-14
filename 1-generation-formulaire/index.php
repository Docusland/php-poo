<html>
<?php
include 'Form.php';
?>
// Des variables par défaut pour vos tests.


</html>
<?php
$firstname = 'toto';
$lastname = 'tata';


$form = new Formulaire('ahah', 'eheh');  // créer le début du formulaire
$form->addTextField('lastname',$lastname); // créer un input de type texte avec comme valeur $lastname
$form->addTextField('firstname',$firstname); // créer un input de type texte avec comme valeur $firstname
$form->addSubmitButton('Save'); //Créer un bouton pour soumettre le formulaire se nommant Save
//var_dump($form);
echo $form->build(); // générer le formulaire
?>
