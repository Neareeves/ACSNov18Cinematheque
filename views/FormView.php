<?php
include('headviews.php');?>
<div class="fondform">
<div id="formulaire">
	<h1>Enrichissement de la base de données</h1>

<form method="post" action="?page=Form">
	<table>
		<tr><td>
	<label for="titre">Entrez le titre du film</label></td>
	<td><input type="text" name="titre"></td></tr><tr>
	<td><label for="date">Entrez l'année de sortie</label></td>
	<td><input type="text" name="date"></td></tr><tr>
	<td><label for="description">Entrez le synopsis</label></td>
	<td><input type="text" name="description"></td></tr><tr>
	<td><label for="realisateur">Entrez le nom du réalisateur</label></td>
	<td><input type="text" name="realisateur"></td></tr><tr>
	<td><label for="genre">Entrez le genre</label></td>
	<td><input type="text" name="genre"></td></tr><tr>
	<td><label for="actor">Entrez l'acteur principal</label></td>
	<td><input type="text" name="actor"></td></tr><tr>
	<td><label for="image">Entrez l'url de l'affiche</label></td>
	<td><input type="text" name="image"></td></tr><tr>
	<td><label for="bandeannonce">Entrez le code youtube de la vidéo   </label></td>
	<td><input type="text" name="bandeannonce"></td></tr><tr>
	<td><input type="submit" name="valider" value="Envoyer"></td></tr>
	</table>
	</form>
</div>
</div>
<?php include('footerviews.php');?>
