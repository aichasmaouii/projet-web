<?php

require_once('Model/employe.php');
require_once('Controller/EmployeC.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Vérification des mots de passe
    if ($password !== $confirmPassword) {
        echo "Les mots de passe ne correspondent pas.";
        exit();
    }

    // Création de l'objet Employe
    $employe1 = new Employe($lastName, $firstName, $password, $phone, $email, $dob);

    // Affichage des informations de l'employé avec var_dump()
    echo "Informations de l'employé avec var_dump(): <br>";
    var_dump($employe1);
    echo "<br><br>";

    // Affichage des informations de l'employé avec la méthode show()
    echo "Informations de l'employé avec la méthode show(): <br>";
    $employeC = new EmployeC();
    $employeC->show($employe1);
}

?>
