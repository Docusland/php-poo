<html>
<?php
include 'Form.php';
?>
// Des variables par défaut pour vos tests.


</html>
<?php
$firstName = 'Nicolas';
$lastName = 'Dupond';
$mail = "$lastName.$firstName@gmail.com ";
$passWord = 'MyPaSsWoRd';


$form = new Formulaire('url', 'post');  // créer le début du formulaire
$form->addTextField('lastname',$lastName); // créer un input de type texte avec comme valeur $lastname
$form->addTextField('firstname',$firstName); // créer un input de type texte avec comme valeur $firstname
$form->addTextField('email',$mail); // créer un input de type texte avec comme valeur $mail
$form->addTextField('password',$passWord); // créer un input de type texte avec comme valeur $passWord
$form->addSubmitButton('Save'); //Créer un bouton pour soumettre le formulaire se nommant Save
//var_dump($form);
echo $form->build(); // générer le formulaire
?>
