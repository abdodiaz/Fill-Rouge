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
    <link rel="stylesheet" href="style/acheter.css">
    <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
    <title>accueil</title>
</head>

<body onload="ativeclass()">
    <!-- navbar -->
    <?php
require_once __DIR__."/../Includes/Head.php";
?>
    <section class="detail">
        <!-- <div class="card mb-3">
    <img src="https://voplus-kifal.imgix.net/kavo/voplus_kifal/presentationduvehicule1_expertise_1627050659546_109810.jpg"  class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div> -->
        <div class="card">
            <img src="https://voplus-kifal.imgix.net/kavo/voplus_kifal/presentationduvehicule1_expertise_1627050659546_109810.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">SUZUKI ALTO</h5>
                <p class="card-text">32 000 DH</p>
            </div>
            <ul class="list-group list-group-flush">       
                <li class="list-group-item">Description</li>
                <li class="list-group-item">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repellat ratione ipsum non provident
                    quidem tempora dolore iure deleniti harum dolorem consectetur ea aspernatur dignissimos,
                    consequuntur quod ut facere nisi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque
                    maxime eum qui corporis quia cumque provident aliquam eos officia fuga, quam praesentium molestias?
                    Neque ab natus vero ratione culpa molestias.
                </li>
            </ul>
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
   document.getElementById('acheter').classList.add('active');
  }
</script>