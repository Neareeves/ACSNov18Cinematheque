<?php

include('ConnectionBDD.php');

function getAllRealisateurs() {
	global $dbh;
	$realisateur = $dbh->query("SELECT * FROM `Realisateurs`;");
	return $realisateur->fetchAll();
}


 function getOneRealisateur($id) {
 	global $dbh;
 	$realisateur =$dbh -> query('SELECT * FROM `Realisateurs` WHERE id_realisateur = (SELECT id_realisateur from Films where id_film = '.$id.');');
 	return $realisateur->fetch();
 }

//  function getRealisateurByID() {
// global $dbh;

//  }
 //recup id real puis nom 
