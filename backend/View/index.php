<?php require_once __DIR__."/../url.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo style.'/style.css'?>">
<script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
    <title>accueil</title>
</head>

<body onload="ativeclass()">
<!-- navbar -->
<?php
require_once __DIR__."/../Includes/Head.php";
?>
      
<section id="banner">
    <div class="content">
        <h2>toujours choisi le bien</h2>
        <p>
             Lorem Ipsum is simply dummy text of the printing andtypesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown  printer took a galley of type and scrambled it to make a
            type specimen book. 
        </p>
        <a href="<?php echo page.'acheter'?>" class="btn">Acheter</a>
        <a href="<?php echo page.'vender'?>" class="btn">Vendre</a>
        
    </div>
</section>
<section class="sect2">
    <h2 >Nos dernières voitures d’occasion</h2>
    <div class="cars d-block d-md-flex justify-content-between ">
      <?php 
      foreach($result as $res){
      ?>
        <div class="card mx-auto " style="width: 18rem;">
            <img class="card-img-top" src="<?php echo cars.$res["Img"]?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $res["Marque"] ?></h5>
              <p class="card-text"><?php echo $res["Finition"] ?></p>
              <a href="#" class="btn ">Détails</a>
            </div>
          </div>
          <?php  }?>
    </div>
</section>
<?php
require_once __DIR__."/../Includes/footer.php";
?>
    <!--  Scripts-->

    <script src="script/script.js"></script>
</body>

</html>
<script>
  function ativeclass(){
    
   document.getElementById('accueil').classList.add('active');
  }
</script>