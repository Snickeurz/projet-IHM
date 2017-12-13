<?php
// Inclusion sur toutes les pages de base, nav & footer
// Base.html est pour l'entête du site
include ("base.html");
// Nav.html pour la barre nav du site
include ("nav.html");
//Récupération du UC
if(!isset($_GET['uc']))
{
    $uc ='home';
}
else
{
    $uc = $_GET['uc'] ;
}

switch ($uc)
{
    case 'redirect':
        include ('./controler/GeneralControle.php');
        break;
    case 'home':
        include('./views/home.html');
        break;
    default :
        break;
}
// footer.html est pour le footer du site
include ('footer.html');
?>