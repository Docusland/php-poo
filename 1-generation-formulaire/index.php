<?php
include 'Form.php';

// Des variables par défaut pour vos tests.

// YOUR CODE HERE                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   

$action  = '#'; // chemin
$method = 'POST';
$nameField = 'Jeux de cartes à collectioner'; // nom du projet
$status = ['A commencer','En cours','Fini'];
$min_age = 3;
$options = 'Test';

$form = new Form($action, $method);  // créer le début du formulaire


$form->addTextField('name',$nameField);

$form->addNumberField('minimum_age',$min_age); 

$form->addSelectField (1,'title',1);

$form->addSubmitButton('Send'); 


echo $form->build(); // générer le formulaire


