<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
<?php
include('headviews.php');?>

<div class="accueil">
<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 1000px">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <p class="titre"><?=$randomMovie1['titre'];?></p>
          <p class="affiche" style="width: 300px"><<?=$randomMovie1['Url_pic'];?></p>
                      
      </div>
      <div class="carousel-item">
          <p class="titre"><?=$randomMovie2['titre'];?></p>
          <p class="titre"><?=$randomMovie2['Url_pic'];?></p>

      </div>
      <div class="carousel-item">
          <p class="titre"><?=$randomMovie3['titre'];?></p>
          <p class="titre"><?=$randomMovie3['Url_pic'];?></p>
           
      </div>
      <div class="carousel-item">
          <p class="titre"><?=$randomMovie4['titre'];?></p>
          <p class="affiches"><?=$randomMovie4['Url_pic'];?></p>
        
      </div>
      <div class="carousel-item">
          <p class="titre"><?=$randomMovie5['titre'];?></p>
          <p class="affiches"><?=$randomMovie5['Url_pic'];?></p>

      </div>
      <div class="carousel-item">
          <p class="titre"><?=$randomMovie6['titre'];?></p>
          <p class="affiches"><?=$randomMovie6['Url_pic'];?></p>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
      <!-- <span class="sr-only">></span> -->
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"><</span> -->
    </a>
  </div>

</div>
</div>
<?php include('footerviews.php');?>