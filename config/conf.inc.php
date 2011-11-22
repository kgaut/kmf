<?php
define('_fINCLUDE',true);

define('DEBUG',false);
$debug_var = array();

$DB_HOST=''; 
$DB_BASE=''; 
$DB_USER=''; 
$DB_PASS=''; 

require_once('functions/database.functions.php');

$DBcon = DBconnexion($DB_HOST,$DB_BASE,$DB_USER,$DB_PASS);
