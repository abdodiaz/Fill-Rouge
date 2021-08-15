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
        <li >
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
        <li class="active">
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
      <h2 class="mb-4">Contact</h2>
      <div class="row">
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">Email</th>
              <th scope="col">Besoin</th>
              <th scope="col">Message</th>
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
                <td><?php echo $res['Besoin'] ?></td>
                <td><?php echo $res['Meessage'] ?></td>
                <td>
                  <form action="">
                    <input type="hidden" value="<?php echo $res['Id'] ?>">
                    
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