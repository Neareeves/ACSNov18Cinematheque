<?php include('headviews.php');?>
<div id="projet">
<section id='consigne'>
	<h3>Ce projet est un exercice réalisé à l'école en cinq jours en décembre 2018. </h3>

	<p> L'objectif est de coder un annuaire de films, sur lequel figurent neuf films de base. Projet réalisé à 3.
	Outils : PHP, modèle MVC (utilisé pour la première fois), et SQL (notamment avec phpmyadmin).</p>
		<div>
			<h5>Cahier des charges:</h5>
			<h6>A) Préparation de la table de donnée en CSV :</h6>
			<ul>
				<li>le titre</li>
				<li>la description</li>
				<li>l'année de sortie</li>
				<li>le genre</li>
				<li>le réalisateur</li>
				<li>Insérer le csv dans Mysql (ce qui permet de voir ce qu'est un csv)</li>
				<li>Etude de la Table films (constat qu'un film peut prendre plusieurs genres)</li>
				<li>Création de la table de liaison qui permet de de lier films à genres</li>
			</ul>

			<h6>B) Développement du site MVC  </h6> 
			<ul>
			<li>Creation du .htaccess qui redirige vers l'index.php</li>
			<li>Création d'un routeur avec $_SERVER['REQUEST_URI'] et un switch</li>
			<li>Création du models movies.php qui contiendrait toutes fonctions des requêtes sur la table films</li>
			<li>Creation des views Responsive avec design : "material Design"</li>
			</ul>
		</div>
	</div>
       
</section>

<?php include('footerviews.php');?>