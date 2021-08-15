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
  <link rel="stylesheet" href="<?php echo dashboard . '/css/vendeurdash.css' ?>">
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
        <li>
          <a href="#"><span class="fa fa-home mr-3"></span> Acceuil</a>
        </li>
        <li class="active">
          <a href="#"><span class="fa fa-user mr-3"></span>Vendeur</a>
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
          <a href="logout" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-log-out"></span> Log out
          </a>
        </li>
      </ul>

    </nav>
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4">Vendeur</h2>
      <div class="forms">
        <form method="Post" action="vendeurdashboard/create">
          <div class="row">
            <div class="col">
              <span>Nom</span>
              <input type="text" class="form-control" name="Nom">
            </div>
            <div class="col">
              <span>Prenom</span>
              <input type="text" class="form-control" name="Prenom">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <span>Email</span>
              <input type="text" class="form-control" name="Email">
            </div>
            <div class="col">
              <span>Telephone</span>
              <input type="text" class="form-control" name="Tele">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <span>Ville</span>
              <input type="text" class="form-control" name="Ville">
            </div>
            <div class="col">
              <button type="submit" name="submit" class="btn btn-primary sub">Ajouter</button>
            </div>
          </div>

        </form>
      </div>

      <div class="row">
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">Email</th>
              <th scope="col">Telephone</th>
              <th scope="col">Ville</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $res) { ?>
              <tr>
                <td scope="row"><?php echo $res['Id'] ?></td>
                <td><?php echo $res['Nom'] ?></td>
                <td><?php echo $res['Prenom'] ?></td>
                <td><?php echo $res['Email'] ?></td>
                <td><?php echo $res['Phone'] ?></td>
                <td><?php echo $res['Ville'] ?></td>
                <td>
                  <form action="">
                    <input type="hidden" value="<?php echo $res['Id'] ?>">
                    <button type="button" class="btn btn-info">Modifier</button>
                    <button type="button" class="btn btn-danger">Supprimer</button> 
                  </form>
                  
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        
      </div>
    </div>
    <script src="<?php echo dashboard . '/js/jquery.min.js' ?>"></script>
    <script src="<?php echo dashboard . '/js/popper.js' ?>"></script>
    <script src="<?php echo dashboard . '/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo dashboard . '/js/main.js' ?>"></script>
</body>

</html>