<?php require_once __DIR__."/../url.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo style.'/acheter.css'?>">
    <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
    <title>accueil</title>
</head>

<body onload="ativeclass()">

    <!-- navbar -->
    <?php
    require_once __DIR__ . "/../Includes/Head.php";
    ?>

    <section class="filter">
        <div class="col-md-5 frms">
            <div class="row">
                <div class="col my-2">
                    <select class="form-control">
                        <option>Marque</option>
                    </select>
                </div>

            </div>
            <div class="row">

            </div>
            <div class="col my-2">
                <select class="form-control">
                    <option>Modèle</option>
                </select>
            </div>
            <div class="row">
                <div class="col my-2">
                    <select class="form-control">
                        <option>Carburant</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <select class="form-control">
                        <option>Ville</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col my-2 d-flex justify-content-center">
                    <button class="btn " type="submit">Filtrer</button>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <?php
            
        ?>
        <div class="cars d-block d-md-flex justify-content-between conts">
            <?php foreach($resul as $res){ ?>
            <div class="card mx-auto " style="width: 18rem;">
                <img class="card-img-top" src="https://voplus-kifal.imgix.net/kavo/voplus_kifal/presentationduvehicule1_expertise_1625490532820_556390.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MERCEDES-BENZ Classe M</h5>
                    <p class="card-text">Classe M II - Ph1 - 420 CDI BVA 306ch</p>
                    <a href="#" class="btn ">Détails</a>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php 
        
        ?>
    </section>
    <?php
    require_once __DIR__ . "/../Includes/footer.php";
    ?>
    <!--  Scripts-->

    <script src="script/script.js"></script>
</body>

</html>
<script>
    function ativeclass() {

        document.getElementById('acheter').classList.add('active');
    }
</script>