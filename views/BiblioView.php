<?php
include('headviews.php');?>
<div class="biblio">
<div class="container">
    <div class="row">
        <h1 class="titrepage"><?=$page?>thèque de films</h1>
      </div>
      <div class="row">
        <p>Cliquez sur un film pour en savoir plus</p>
    </div>
    <div class="row">
        <div class="col-md">
            <ul> 
                <!-- Comme la vue est incluse depuis le controller, on a accès à la variables $movies du controller : on fait une boucle pour afficher le titre de chaque film -->
                <?php foreach ($movies as $key => $movie) : ?>
                   <li>
            <div class="cont">
                    <a href="?page=film&id=<?=$movie['id_film']?>"><?=$movie['titre']?></a>
                    </div>
                  </li>
               <?php endforeach; ?>

          </ul>
      </div>
      <div class="cardcontainer" style="width: 400px">
        <div class="card">
          <div class="card-title">
          <h3>Une affiche au hasard</h3>
        </div>
          <div class="card-text">
          <p><?=$randomMovie['titre'];?></p>
        </div>
          <div class="card-img-bottom">
            <?=$randomMovie['Url_pic'];?>
          </div>
      </div>
        </div>
    </div>
  </div>
  </div>
  <?php include('footerviews.php');?>