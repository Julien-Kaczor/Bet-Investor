<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Betting-Investor</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand ml-5"><i class="fa fa-money-bill-wave mr-2"></i> Betting Investor</a>
    <div class="form-inline">
      @guest
        <a class="btn btn-outline-or my-2 my-sm-0 mr-2" href="login"><i class="fa fa-sign-in-alt mr-1"></i>  Se connecter</a>
        <a class="btn btn-outline-secondary my-2 my-sm-0 mr-5" href="register"><i class="fa fa-user-plus mr-1"></i>  S'inscrire</a>
      @endguest
      @auth
        <a class="btn btn-outline-or my-2 my-sm-0 mr-5" href="home"><i class="fa fa-link mr-1"></i>  Pronostics</a>
      @endauth
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Betting-Investor</h1>
          <h3><i>Suivi par plus de 5000 personnes sur Télégram, Adhérez au spécialiste de la gestion de mise !</i></h3></br>  
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <a class="btn btn-block btn-or btn-lg" href="register">En savoir plus<i class="fa fa-plus ml-2"></i></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa fa-money-bill m-auto text-or"></i>
            </div>
            <h4>GESTION DE MISE</h4>
            <p class="lead mb-0 mt-3">Chacun de nos pronostics a son conseil de mise à côté, ne vous laissez pas trahir par l’appât du gain, jouez intelligemment à nos côtés.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa fa-binoculars m-auto text-or"></i>
            </div>
            <h4>ANALYSES PRO</h4>
            <p class="lead mb-0">Chacun de nos pronostics sont analysé avec un œil d’expert, des analyses complètes pour maximiser le gain et minimiser la perte.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-or"></i>
            </div>
            <h3>STATS FAVORABLES</h3>
            <p class="lead mb-0">Un fort taux de réussites basé sur des analyses statistiques & des méthodes innovantes pour miser plus sereinement.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center">
    <div class="container" style="display: flex; justify-content: center; flex-direction: row;">
      <div style="width: 50%" class="card box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Pack Investor</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">25 € <small class="text-muted">/ mois</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Accès à l'espace V.I.P</li>
            <li>Indicateur de confiance</li>
            <li>Gestion de mise</li>
            <li>Conseils personnalisés 24h/24h</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-or">Acheter <i class="fa fa-shopping-basket ml-2"></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="warning-gambling">Les jeux d’argent et de hasard sont interdits aux mineurs. Jouer comporte des risques : endettement, dépendance, isolement. Appelez au 09 74 75 13 13 (appel non surtaxé).</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item ">
              <a class="text-or" href="home">Accueil</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a class="text-or" href="login">Se connecter</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a class="text-or" href="register">S'inscrire</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a class="text-or" href="#">Mentions légales</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Betting-Investor 2019. Tous droits réservés.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw text-or"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-snapchat fa-2x fa-fw text-or"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw text-or"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
