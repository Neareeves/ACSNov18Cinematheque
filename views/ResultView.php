<?php
include('headviews.php');?>
<h3>Vous avez bien rentré les informations suivantes :</h3>
<p>Titre : <?=$new_titre?></p>
<p>Année de sortie : <?=$new_date?></p>
<p>Réalisé par <?=$new_realisateur?></p>
<p>Genre : <?=$new_genre?></p>
<p>Synopsis : <?=$new_description?></p>

<a href="?page=Home"><i class="fas fa-home"></i>

<?php include('footerviews.php');?>