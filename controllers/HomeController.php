<?php


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

$id_aleatoire1 = rand(1, intval($idmax));
$randomMovie1=getRandomMovie($id_aleatoire1);

$id_aleatoire2 = rand(1, intval($idmax));
$randomMovie2=getRandomMovie($id_aleatoire2);

$id_aleatoire3 = rand(1, intval($idmax));
$randomMovie3=getRandomMovie($id_aleatoire3);

$id_aleatoire4 = rand(1, intval($idmax));
$randomMovie4=getRandomMovie($id_aleatoire4);

$id_aleatoire5 = rand(1, intval($idmax));
$randomMovie5=getRandomMovie($id_aleatoire5);

$id_aleatoire6 = rand(1, intval($idmax));
$randomMovie6=getRandomMovie($id_aleatoire6);
}

//traiter les données
foreach ($movies as $key => $movie) {
    $movie['id_realisateur'] = ucfirst($movie['id_realisateur']); //Mets une majuscule au nom du réalisateur
}

//inclure la vue
include('views/HomeView.php');

