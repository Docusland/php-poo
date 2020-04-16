<?php
include 'Form.php';

// Des variables par défaut pour vos tests.

// YOUR CODE HERE
$action = "toto";
$method = "tata";
$nom = "brian";
$prenom = "danetz";
$email = "brian.danetz@gmail.com";
$option = "que choisis tu ?";
$name = "jean";
$value = "test";


$form = new Form($action, $method);  // créer le début du formulaire
$form->addTextField('nom',$nom); // créer un input de type texte avec comme valeur par défaut $nom
$form->addTextField('prenom',$prenom); // créer un input de type texte avec comme valeur par défaut $prenom
$form->addTextField('email',$email); // créer un input de type texte avec comme valeur par défaut $email
$form->addSubmitButton('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
$form->addSelectField('option',$option);
$form->addSelectField('name',$name);
$form->addSelectField('value',$value);


echo $form->build(); // générer le formulaire