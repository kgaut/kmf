<?php
define('_fINCLUDE',true);

define('DEBUG',false);
$debug_var = array();

$DB_HOST=''; //serveur de base de données, localhost
$DB_BASE=''; //nom de la base de données
$DB_USER=''; //utilisateur se connectant à la base de données (généralement root)
$DB_PASS=''; //mot de passe de connexion à la base de données


//on ne se connecte que si les infos sont rentrées
if(trim($DB_HOST)!="") {
    require_once('functions/database.functions.php');
    $DBcon = DBconnexion($DB_HOST,$DB_BASE,$DB_USER,$DB_PASS);
}

