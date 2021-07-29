<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://localhost/Fill-Rouge/backend/view/style/contact.css">
  <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
  <title>accueil</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid bar">
      <a class="navbar-brand logo" href="#"> VL<span>.</span></a>
      <button class="navbar-toggler btn-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars menu"></i>
      </button>
      <div class="collapse navbar-collapse nav" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index.html">ACCUEIL</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/Acheter.html">Acheter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/vendre.html">Vendre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/vendre.html">Fiches techniques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">À propos de nous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>

  <section class="contact">
    <div class="container">
      <div class=" text-center mt-5 ">
        <h1>Contact</h1>
      </div>
      <div class="row ">
        <div class="col-lg-7 mx-auto">
          <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
              <div class="container">
                <form id="contact-form" role="form" method="POST" action="contact/create">
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"> <label for="form_name">Firstname *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required."> </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"> <label for="form_lastname">Lastname *</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required."> </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"> <label for="form_need">Please specify your need *</label> <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                            <option value="" selected disabled>--Select Your Issue--</option>
                            <option>Request Invoice for order</option>
                            <option>Request order status</option>
                            <option>Haven't received cashback yet</option>
                            <option>Other</option>
                          </select> </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> <label for="form_message">Message *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                      </div>
                      <div class="col-md-12"> <input type="submit" name="sub" class="btn btn-success btn-send pt-2 btn-block " value="Send Message"> </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> <!-- /.8 -->
        </div> <!-- /.row-->
      </div>
    </div>
  </section>
  <div class="container my-5">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h4 class="text-uppercase mb-4 font-weight-bold">
                VL<span style="color: hsl(51, 100%, 50%);">.</span>
              </h4>
              <p>
                est la marketplace qui réinvente l’expérience d’achat et de vente de sa voiture d’occasion. Accompagnement bout en bout et certification de véhicules.
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />


            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                links
              </h6>
              <p>
                <a href="#" class="text-white">Accueil</a>
              </p>
              <p>
                <a href="#" class="text-white">Vendre</a>
              </p>
              <p>
                <a href="#" class="text-white">Acheter</a>
              </p>
              <p>
                <a href="#" class="text-white">Fiches techniques
                </a>
              </p>
              <p>
                <a href="#" class="text-white">
                  À propos de nous
                </a>
              </p>
              <p>
                <a href="#" class="text-white">
                  Contact</a>
              </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> Sidi Bennour, 139 Lot widad, MA</p>
              <p><i class="fas fa-envelope mr-3"></i> abdelbarredazia@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 212 7 0665 4771</p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3">
                © 2020 Copyright : Abdelbarre Dazia


              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->
  </div>

  <!--  Scripts-->

  <script src="script/contactscript.js"></script>
</body>

</html>