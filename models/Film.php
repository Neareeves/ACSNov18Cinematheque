<?php

include('ConnectionBDD.php');

function getAllMovies() {
	global $dbh;
	$movie = $dbh->query("SELECT * FROM `Films`;");
	return $movie->fetchAll();
}


function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM `Films` WHERE id_film='.$id.';');

    return $movies->fetch();
}

function getIdMax() {
	global $dbh;
	$idmax= $dbh->query('SELECT MAX(id_film) FROM Films ;');
	return $idmax->fetch();
}


function getRandomMovie($id_aleatoire) {
	global $dbh;
	$randomMovie= $dbh->query('SELECT * FROM Films WHERE id_film = '.$id_aleatoire.';');
	return $randomMovie->fetch();
}

// function getTheTrailer() {
// 	global $dbh;
// 	$bande_annonce = $dbh -> query("SELECT Url_BA FROM Films WHERE id")
// }