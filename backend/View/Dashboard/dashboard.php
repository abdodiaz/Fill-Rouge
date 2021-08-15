<?php require_once __DIR__ . "/../../url.php" ?>
<!doctype html>
<html lang="en">

<head>
  <title>Sidebar 04</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo dashboard . '/css/style.css' ?>">
  <link rel="stylesheet" href="<?php echo dashboard . '/css/acceuil.css' ?>">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.html" class="logo">VL.</a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="#"><span class="fa fa-home mr-3"></span> Acceuil</a>
        </li>
        <li>
          <a href="vendeurdashboard"><span class="fa fa-user mr-3"></span>Vendeur</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-sticky-note mr-3"></span>
            Voiture A vendre
          </a>
        </li>

        <li>
          <a href="#"><span class="fa fa-paper-plane mr-3"></span> Voiture vender</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-paper-plane mr-3"></span> Fiche technique</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contact</a>
        </li>
        <li>
          <a href="logout"  class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </li>
      </ul>
      
    </nav>
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4">Acceuil</h2>
      <div class="row">
        <div class="col-sm-3">
          <div class="card contact">
            <div class="card-body " style="text-align:center ">
            
              <h1 class="card-title text-white">
                <i class="far fa-address-book"></i></h1>
               <h3 class="text-white">Contact</h2> 
              
              <h2 class="card-text text-white"><?php echo $contact ?></h2>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card vv">
            <div class="card-body " style="text-align:center ">
              <h1 class="card-title"><i class="fas fa-car"></i> </h1>
               <h3>Voiture A vendre</h2> 
             
              <h2 class="card-text"><?php echo $voiture ?></h2>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card vendeur">
            <div class="card-body " style="text-align:center ">
              <h1 class="card-title"><i class="fas fa-user"></i> </h1>
               <h3>Vendeur</h2> 
              <h2 class="card-text"><?php echo $vendeur ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo dashboard . '/js/jquery.min.js' ?>"></script>
  <script src="<?php echo dashboard . '/js/popper.js' ?>"></script>
  <script src="<?php echo dashboard . '/js/bootstrap.min.js' ?>"></script>
  <script src="<?php echo dashboard . '/js/main.js' ?>"></script>
</body>

</html>