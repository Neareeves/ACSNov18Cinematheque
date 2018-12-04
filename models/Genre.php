<?php
include('ConnectionBDD.php');

// function getAllGenres() {
// 	global $dbh;
// 	$genres = $dbh->query("SELECT * FROM `Genres`;");
// 	return $genres->fetchAll();
// }

function getOneGenre($id) {
 	global $dbh;
 	$genre =$dbh -> query("SELECT  genre FROM `Genres` JOIN films_genres on films_genres.id_genre = Genres.id_genre JOIN Films on films_genres.id_film = Films.id_film WHERE Films.id_film='".$id."';");
 	return $genre->fetchAll();
 }





 // function getOneGenre($id) {
 // 	global $dbh;
 // 	$genre =$dbh -> query("SELECT  genre from Films, Genres WHERE id_film = '".$id."';");
 // 	return $genre->fetch();
 // }
 // function getOneGenre($id) {
 // 	global $dbh;
 // 	$genre =$dbh -> query('SELECT * FROM `Genres`INNER JOIN `Films` ON Genres.id_genre = Films.id_film;');
 // 	return $genre->fetch();
 // }