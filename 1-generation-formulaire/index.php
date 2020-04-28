<?php
include 'Form.php';

// Des variables par défaut pour vos tests.

// YOUR CODE HERE
$action = '#';
$method = 'POST';
$name = 'Pandémie';
$min_age = 14;
$min_valeurs = 0;
$max_valeurs = 4;
$is_available = (bool) true;
$options = ['Bernard ','jean-claude','yves' , 'Antoine' , 'Didier' , 'Anne-Lise'];

$form = new Form($action, $method);  // créer le début du formulaire
$form->addTextField('name',$name); // créer un input de type texte avec comme valeur par défaut $nom
$form->addTextField('prenom',$name); // créer un input de type texte avec comme valeur par défaut $prenom
$form->addNumberField('min_age',$min_age);
$form->addNumberField('min_valeurs',$min_valeurs);
$form->addNumberField('max_valeurs',$max_valeurs);
$form->addCheckboxField('is_available', $is_available);
$form->addSubmitButton('Save'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
$form->addSelectField($options, $name , $method);


echo $form->build(); // générer le formulaire