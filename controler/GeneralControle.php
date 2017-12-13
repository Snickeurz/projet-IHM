<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 07/12/2017
 * Time: 21:48
 */

// Controleur général pour le site

if(!isset($_GET['ac']))
{
    $action ='home';
}
else
{
    $action = $_GET['ac'];
}

switch ($action)
{
    case 'calendrier':
        include('./views/calendrier.html');
        include('./ressources/js/neige.js');
        include('./views/jeux/flappyLike.js');
        break;
    case 'crossMatch':
        include('./views/jeux/crossMatch.html');
        break;
}
