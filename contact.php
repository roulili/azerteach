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
  </head>
  <body id="gallerie">

<?php include('includes/navbar.php'); ?>


  <div class="section section-contact-top">
    <div class="container">
      <img src="img/logo.png" id="matiere-logo" alt="logo"/>
      <h2 class="page-title">Contactez-nous !</h2>
    </div>
  </div>

      <div class="section section-contact-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 matiere-details">
          <form class="form text-left" role="form" methode="post" action="#">
            <p>L'équipe Azerteach se tient à votre disposition:</p>
            <p class="text-center">
              du <span class="text-blue">lundi au vendredi</span> de <span class="text-blue">14h à 19h30</span>.
            </p>
            <p>Pour toute demande d'informations, de réservations ou de prises de rendez-vous, nous vous invitons à compléter le <b>formulaire</b> ci-dessous, ou à nous contacter par téléphone au <b>02 345 48 37</b> durant nos heures de permanence.
            </p>
            <div class="row">
              <div class="col-sm-6">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email"/>
              </div>
              <div class="col-sm-6">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" id="name" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="subject">Sujet</label>
                <input type="text" name="subject" class="form-control" id="subject"/>
              </div>
              <div class="col-sm-6">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" class="form-control" id="telephone" />
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <textarea class="form-control" rows="5" >Message
                  </textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <label for="origin">Comment avez-vous connu Azerteach ?</label>
                <select class="form-control" name="origin" id="origin">
                  <option selected disabled>Choisissez une option</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="col-sm-4">
                <br />
                <button class="btn btn-azt">Envoyer</button>
              </div>
            </div>
          </form>          
          </div>
        </div>
      </div>
    </div>
    
    <div class="section section-contact section-contact-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center tel-contact">
            <p>Plus d'informations et réservation des cours:</p>
            <tel>02 345 48 37</tel>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-map">
      <img src="img/pointe-haute.png" class="background-image">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center map">
            <img src="img/contact-map.png" class="contact-map" />
          </div>
        </div>
      </div>
    </div>

<?php include('includes/footer.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/scrollspy.js"></script>
    <script src="js/rouli.js"></script>
  </body>
</html>