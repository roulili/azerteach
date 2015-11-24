<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/smartphone.css">
    
  </head>
  <body id="index">
    <!-- Navbar -->
    <!--
    <nav class="navbar navbar-landing">
      <a class="navbar-brand" href="#"><span class="font-thin">azer</span>teach</a>
      <ul class="nav navbar-nav nav-phone navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="#">02 344 35 43</a>
        </li>
      </ul>
    </nav>-->
<nav class="navbar navbar-landing hidden-xs" id="navbar-scrolltrick">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="font-thin">azer</span>teach</a>
    </div>
  
      <ul class="nav navbar-nav navbar-right nav-phone">
        <li class="nav-item">
          <a class="nav-link" href="#">02 344 35 43</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <nav id="floating-nav">
    <ul class="nav navbar-nav floating-nav hidden-xs">
        <li><a href="#">présentation</a></li>
        <li class="active dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            matieres
            <span class="sr-only">(current)</span>
            <span class="caret"></span>
          </a>
           <ul class="dropdown-menu">
            <li><a href="/matieres/mathematiques">Mathématiques</a></li>
            <li><a href="/matieres/sciences">Sciences</a></li>
            <li><a href="/matieres/francais">Français</a></li>
            <li><a href="/matieres/anglais">Anglais</a></li>
            <li><a href="/matieres/neerlandais">Néerlandais</a></li>
          </ul>
        </li>
        <li class="active dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            services
            <span class="sr-only">(current)</span>
            <span class="caret"></span>
          </a>
           <ul class="dropdown-menu">
            <li><a href="/services/cours-particuliers">Cours particuliers</a></li>
            <li><a href="/services/etudes-encadrees">Etudes encadrées</a></li>
            <li><a href="/services/stages">Stages de vacances</a></li>
            <li><a href="/services/blocus-assiste">Blocus assistés</a></li>
            <li><a href="/services/methode-de-travail">Méthode de travail</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">supérieur <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/services/blocus-assiste">Blocus assisté</a></li>
            <li><a href="/services/methode-de-travail">Méthode de travail</a></li>
          </ul>
        </li>
        <li><a href="/galerie">galerie</a></li>
        <li><a href="/contact">contact</a></li>
      </ul>
    </nav>

  <?php include('includes/navbar.php'); ?>

    <div class="section section-landing fixed-bg-1">
      <div class="container">
        <img src="img/logo.png" alt="logo" id="landing-logo"/>
        <h2 class="page-title">Encadrer ses études<br/><small>Libérer son potentiel</small></h2>
      </div>
      <div class="more hidden-xs">
        <img src="img/fleche.png" alt="see more" />
      </div>
      <div class="landing-phone visible-xs-block text-center">
        02 344 35 43
      </div>
    </div>

    <div class="section section-photo-etudes fixed-bg-2">
    </div>
    <div class="section section-photo-cours fixed-bg-3">
    </div>
    <div class="section section-photo-stages fixed-bg-4">   
    </div>
    <div class="section section-photo-stages fixed-bg-5">   
    </div>
    <div class="section section-photo-etudes fixed-bg-6">
    </div>
    <div class="section section-photo-etudes fixed-bg-2">
    </div>
    <div class="section section-photo-etudes fixed-bg-4 visible-xs-block">
    </div>
    <div class="section section-photo-etudes fixed-bg-4 visible-xs-block">
    </div>
    <div class="section section-photo-etudes fixed-bg-6 visible-xs-block">
    </div>

    <div class="scrolling-wrapper">
    <div class="section section-welcome bg-scroll">
      <img src="img/section-welcome.png" id="section-welcome-background" class="background-blue hidden-xs"/>
      <img src="img/fond-welcome-xs.png" id="section-welcome-background" class="background-blue visible-xs-block"/>
      <div class="container">
        <h1>Bienvenue chez AzerTeach !</h1>
        <div class="row"><div class="col-sm-5 col-xs-3"></div><div class="col-sm-2 col-xs-6 separation"></div></div>
        <div class="row">
          <p class="lead">
            Nous vous proposons<br />
            une aide solide<br />
            dans la réalisation de vos études,<br />
            grâce à un programme<br />
            personnalisable<br />
            et une équipe de professeurs<br />
            passionnés.
          </p>
        </div>
      </div>
    </div>

    <div class="section section-etudes bg-scroll">
      <img src="img/section-etudes.png" id="section-etudes-background" class="background-blue hidden-xs"/>
      <img src="img/section-etudes-xs.png" id="section-etudes-background" class="background-blue visible-xs-block"/>
      <div class="container">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 text-center azerbloc">
            <img src="img/bloc-etudes.png" class="azerform" id="bloc-etudes"/>
            <h3 class="text-blue">études encadrées</h3>
            <p>
              Par <span class="text-blue">groupe de 4</span>,<br />
              chaque élève travaille <br />
              les matières de son choix <br />
              en compagnie d’un <br />
              <span class="text-blue">professeur</span> expérimenté.
            </p>
          </div>
          <div class="col-sm-4">
            <h3 class="section-caption">Un suivi régulier<br />tout au long de l'année</h3>
          </div>
        </div>
      </div>
    </div>

	  
	
    <div class="section section-cours bg-scroll">
      <img src="img/section-cours.png" id="section-cours-background" class="background-blue hidden-xs"/>
      <img src="img/section-etudes-xs.png" id="section-etudes-background" class="background-blue visible-xs-block"/>
      <div class="container">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-3">
            <h3 class="section-caption text-right">Revoir une matière<br />de A à Z</h3>
          </div>
          <div class="col-sm-4 text-center azerbloc">
            <img src="img/bloc-cours.png" class="azerform" id="bloc-cours"/>
            <h3 class="text-blue">Cours Particuliers</h3>
            <p>
              Seul avec son<span class="text-blue"> professeur</span>,<br />
              l'élève passe en revue <br />
              tous les <span class="text-blue">points difficiles</span> <br />
            </p>
          </div>
        </div>
      </div>
    </div>
	
    <div class="section section-blocus bg-scroll">
      <img src="img/section-blocus.png" id="section-blocus-background" class="background-blue hidden-xs"/>
      <img src="img/section-etudes-xs.png" id="section-etudes-background" class="background-blue visible-xs-block"/>
      <div class="container">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4 text-center azerbloc">
            <img src="img/bloc-blocus.png" class="azerform" id="bloc-blocus"/>
            <h3 class="text-blue">Blocus assistés</h3>
            <p>
			  Le temps d'une semaine<br/>
			  ou plus, l'étudiant<br/>
			  profite d'un <span class="text-blue"> lieu calme</span></br>
              et déconnecté des distractions<br/>
			  usuelles bénéficiant des<br/>
			  conseils et encouragements<br/>
			  d'un <span class="text-blue">coach</span> qualifié
            </p>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <h3 class="section-caption">Optimisez vos chances<br />de réussite !</h3>
          </div>
        </div>
      </div>
    </div>
	
	 
	
    <div class="section section-stages bg-scroll">
      <img src="img/section-stages2.png" id="section-stages-background" class="background-blue hidden-xs"/>
      <img src="img/section-etudes-xs.png" id="section-etudes-background" class="background-blue visible-xs-block"/>
      <div class="container">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 text-center azerbloc" id="bloc-stages">
            <img src="img/bloc-stages.png" class="azerform" />
            <h3 class="text-blue">stages de vacances</h3>
            <p>
			  Participez à des tables<br/>
			  de conversations en <span class="text-blue"> anglais</span><br/>
			  et <span class="text-blue"> néerlandais</span><br/>
			  ou découvrez les<span class="text-blue"> sciences</span>,<br/>
			  la<span class="text-blue"> programmation</span><br/>
              et la création de sites web.
            </p>
          </div>
          <div class="col-sm-4">
            <h3 class="section-caption">Continuez à apprendre<br />en vous amusant !</h3>
          </div>
        </div>
      </div>
    </div>
	</div>


  <div class="infos">
    <p class="text-blue">Plus d'informations et réservation des cours :</p>
    <p class="text-blue num">02 344 35 43</p>
  </div>

    <div class="section section-map">
      <img src="img/pointe-haute.png" class="background-image">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center map">
            <img src="img/contact-map.png" class="contact-map hidden-xs" />
            <img src="img/map-xs.png" class="contact-map visible-xs-block" />
          </div>
        </div>
      </div>
    </div>

	
<?php include('includes/footer.php'); ?>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/scrollspy.js"></script>
    <script src="js/rouli.js"></script>
  </body>
</html>