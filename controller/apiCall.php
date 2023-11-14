<?php
session_start();
unset($_SESSION['error']);
unset($_SESSION['data']);


$strToEdit = $_GET['search'];
$strToEdit = str_replace(' ', '+', $strToEdit);
$strToEdit = "https://api-adresse.data.gouv.fr/search/?q=". $strToEdit . "&limit=5";

try {
    $curl = curl_init($strToEdit);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
    ));
    $data = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($data, true);
    $_SESSION['data'] = $data;
    header('Location: ../index.php');
} catch (Exception $e) {
    $_SESSION['error'] = "Une erreur est survenue, veuillez réessayer plus tard.";
    header('Location: ../index.php');
}