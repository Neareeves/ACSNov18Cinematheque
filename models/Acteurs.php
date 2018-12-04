<?php
include('ConnectionBDD.php');

function getTheActors($id) {
 	global $dbh;
 	$actors =$dbh -> query("SELECT  acteurs FROM `Acteurs` JOIN acteurs_films on acteurs_films.id_acteur = Acteurs.id_acteur JOIN Films on acteurs_films.id_film = Films.id_film WHERE Films.id_film='".$id."';");
 	return $actors->fetchAll();
 }

