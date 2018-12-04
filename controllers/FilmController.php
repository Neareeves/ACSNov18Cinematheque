<?php

//le controlleur inclut le ou les modèles
include('models/Film.php');
include('models/Genre.php');
include('models/Realisateur.php');
include('models/Acteurs.php');

//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
$id=$_GET['id'];
$movie = getOneMovie($id);
$realisateur = getOneRealisateur($id);
$genre = getOneGenre($id);
//$genres = getAllGenres();

$actors=getTheActors($id);

// $extenso = strrchr($fichier,".");
       
    // // //    if (($extenso == '.jpg') || ($extenso == '.png') || ($extenso == '.jpeg') || ($extenso == '.PNG') || ($extenso == '.JPG') || ($extenso == '.JPEG')) {

              // // // echo '<div class="fichier"><a href="?dossier='.$dossier.'&amp;file='.$fichier.'"><img src="images/feuillejungle4.png"/>    '.$fichier.'</a></div>';
              
//traiter les données
$realisateur['realisateur'] = ucfirst($realisateur['realisateur']); //Met une majuscule au nom du réalisateur


//inclure la vue
include('views/FilmView.php');
function getRealisateurById() {

}

?>