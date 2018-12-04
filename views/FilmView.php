<?php
include('headviews.php');?>

<div id="conteneurfilm">
  <div id="contenantfilm">
    <div id="opacite">
      <h1 id="titrepage"><?=$page?></h1>
      <div class="container">
        <div class="row">
          <h2 class="titremovie"><?=$movie['titre']?></h2>
        </div>


        <div class="row">

          <div class="col-md-6 col-sm">
            <ul class="listedescr">
              <li>Sorti en <?=$movie['annee_sortie']?></li>
              <li>Réalisé par <?=$realisateur['realisateur']?></li>
              <li>Genre : <?php
              foreach ($genre as $key => $genre) {
                echo $genre['genre'].' ';
              } 

// A trouver plus trd, comment enlever la dernière virgule :
//echo trim($test, ',');
// echo 'substr';
// echo substr($test, 0, strpos($test, ','));

              ?>
            </li>
            <li>Acteurs : <?php

            foreach ($actors as $key => $actors) {
              echo $actors['acteurs'].', ';

            } 
            ?></li>
          </ul>
          <h4>Synopsis</h4>

          <p><?=$movie['description']?></p>
        </div>
        <div class="col-md-1"> </div>    
        <div class="col-md-5 rgt">

         <?=$movie['Url_pic']?>


       </div>
     </div>

     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="video">Voir la bande annonce</button>
   </div>
 </div>
 <div id="bandeannce">


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?=$movie['titre']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=$movie['Url_BA']?>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div> -->
    </div>
  </div>
</div>
 

</div>
<!-- <?=$movie['Url_BA']?> -->

</div>

</div>
<!-- <img src="photo2.jpg" alt="Affiche du film"/> -->
<a href="?page=Home"><i class="fas fa-home"></i>
</a>
</div>
<script type="text/javascript">
  let bouton = document.getElementById('video');
  let division = document.getElementById('bandeannce');
  let divopacity = document.getElementById('opacite');
  division.style.display= "none";
  divopacity.style.opacity = 1;
  function showTrailer() {
    division.style.display= "block";
    divopacity.style.opacity = 1;
  }
  bouton.addEventListener('click', showTrailer);
</script>
<?php include('footerviews.php');?>
