
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>caroussel PHP</title>
  </head>
  <h1>Mon petit carrousel en PHP</h1>
  <body>
    <div class="container">
          <div
      id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel"
    >
    <div class="carousel-inner">
   <?php
    //récupération du contenu du dosssier image
    //scandir est une fonction qui scan un dossier et qui retourne un tableau
    $scan = scandir('img');
    
    //utilisation d'une boucle foreach pour afficher les images
    //attention à "." et ".." qui ne sont plas des images
    foreach($scan as $k=>$v){
        if($v!="."&&$v!=".."){
  ?>
              <div class="carousel-item <?php if($k==2){ echo "active";} ?> " data-bs-interval="5000">
              <img src="./img/<?=$v?>"  class="d-block w-100" alt="image">
            </div>
           
            <?php
        }
    }
    ?>

      
         
          
 

      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
    </div>

</html>
