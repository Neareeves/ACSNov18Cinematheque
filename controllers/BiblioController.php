<?php

//le controlleur inclut le ou les modèles
include('models/Film.php');
include('models/Genre.php');
include('models/Realisateur.php');
include('models/Acteurs.php');

$id=2;
//Récupérer les données (ici, tous les films car on est sur la home)
$movies = getAllMovies();

$movie = getOneMovie($id);

$idmax = getIdMax();
foreach ($idmax as $idmax) {

$id_aleatoire = rand(1, intval($idmax));
$randomMovie=getRandomMovie($id_aleatoire);
}

//traiter les données
foreach ($movies as $key => $movie) {
    $movie['id_realisateur'] = ucfirst($movie['id_realisateur']); //Mets une majuscule au nom du réalisateur
}


include('views/BiblioView.php');


?>