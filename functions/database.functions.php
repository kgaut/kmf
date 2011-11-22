<?php

function DBconnexion($DB_HOST,$DB_BASE,$DB_USER,$DB_PASS) {
	return new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_BASE, $DB_USER, $DB_PASS);
}

function DBselect($query,$fetch = PDO::FETCH_ASSOC) {
	global $DBcon;
	global $debug_var;
	if(DEBUG) {
		$debug_var["query_select"][] = array("heure"=>date('h:i:s:u'),"requete"=>$query);
	}
	//execution de la requete
	$sth = $DBcon->query($query);
	$result = false;
	// si pas d'erreure on fetch, sinon on retourne false
	if ($sth) {$result = $sth->fetchall($fetch);}
	return $result;
}

//à utiliser pour INSERT UPDATE DELETE
function DBexec($query) {
	global $DBcon;
	global $debug_var;
	if(DEBUG) {
		$debug_var["query_exec"][] = array("heure"=>date('h:i:s:u'),"requete"=>$query);
	}
	//execution de la requete
	return $DBcon->exec($query);
}
?>