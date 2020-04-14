<?php
include 'Form.php';

// Des variables par défaut pour vos tests.


$lastname = 'GERARD';
$firstname = 'CREPIN';
$method = '_POST';
$action = '#';

// YOUR CODE HERE

$form = new Form($action, $method);  // créer le début du formulaire
$form->addTextField('lastname',$lastname); // créer un input de type texte avec comme valeur par défaut $nom
$form->addTextField('firstname',$firstname); // créer un input de type texte avec comme valeur par défaut $prenom
$form->addSubmitButton('Save'); //Créer un bouton pour soumettre le formulaire se nommant Modifier

foreach ($form->fields as $field) {
    echo $field.' ';
}

echo $form->build(); // générer le formulaire