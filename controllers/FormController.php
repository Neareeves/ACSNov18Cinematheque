<?php


include('models/Film.php');
include('models/Genre.php');
include('models/Realisateur.php');
include('models/Form.php');




if (isset($_POST['valider'])) {
$new_titre=$_POST['titre'];
$new_date=$_POST['date'];
$new_description=$_POST['description'];
$new_realisateur=$_POST['realisateur'];
$new_genre=$_POST['genre'];
$new_actor=$_POST['actor'];
$new_ba='<iframe width="560" height="315" src="'.$_POST['bandeannonce'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
$new_affiche='<img class="affiche" style="max-width:300px" src="'.$_POST['image'].'"/>';

//$insert=1;
//$insert = sendNewMovieToDB($new_titre, $new_description, $new_date);
//$insert_film=sendNewRealToDB($new_realisateur);
 
//$insert_genre=sendNewGenreToDB($new_genre);
//$update_real=updateTheReal();
$insertion = insertAndUpdateMovie($new_titre, $new_description, $new_date, $new_genre, $new_actor,$new_realisateur,$new_affiche, $new_ba);

include('views/ResultView.php');
} else {
include('views/FormView.php');
}


