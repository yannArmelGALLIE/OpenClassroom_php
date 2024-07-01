<?php session_start(); 

require_once(__DIR__ . '/fonctions.php');

// Détruire la session
session_unset();
session_destroy();




redirectToUrl('home.php');