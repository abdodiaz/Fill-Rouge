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
        <link rel="stylesheet" href="<?php echo style.'/vendre.css'?>">
    <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
    <title>accueil</title>
</head>

<body onload="ativeclass()">
    <!-- navbar -->
<?php
require_once __DIR__."/../Includes/Head.php";
?>
      
    <section class="Vendre">
        
        <div class="row" style="width: 100%;">
            <div class="col-md-6 txt text-sm-start">
               <p> Simplifiez-vous la vie <br>
                Nous nous occupons de la procédure de vente</p>
            </div>
            <div class="col-md-5 frms">
                <form method="Post" action="Vendre/create">
                    <div class="mrjn"></div>
                    <div class="row" >
                        <h1>Vendre Voiture</h1>
                    </div>
                    <div class="row">
                        <div class="col my-4">
                            <input type="text" class="form-control" placeholder="Prénom">
                        </div>
                        <div class="col  my-4">
                            <input type="text" class="form-control" placeholder="Nom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col my-4">
                            <input type="tel" class="form-control" placeholder="Telephone">
                        </div>
                        <div class="col my-4">
                            <select class="form-control">
                                <option>Ville</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col my-4" style="width: 15vh;">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col my-4 d-flex justify-content-center">
                            <button class="btn " type="submit">Suivant</button>
                        </div>
                    </div>
            </div>
        </div>
            </form>

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
    
   document.getElementById('vendre').classList.add('active');
  }
</script>