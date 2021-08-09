<?php require_once __DIR__."/../url.php"?>
<nav class="navbar navbar-expand-lg navbar-light bg-light " >
            <div class="container-fluid bar">
                <a class="navbar-brand logo" href="#"> VL<span>.</span></a>
                <button class="navbar-toggler btn-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars menu"></i>
                </button>
                <div class="collapse navbar-collapse nav" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link  " id="accueil" aria-current="page" href="<?php echo page.'home'?>">ACCUEIL</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="acheter" href="<?php echo page.'acheter'?>">Acheter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="vendre" href="<?php echo page.'vender'?>">Vendre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="fiches" href="<?php echo page.'fiche'?>">Fiches techniques</a>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nouss" href="">À propos de nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contacts" href="<?php echo page.'contact'?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
