<?php
if(isset($_POST['action']) && $_POST['action']=='contact')
{
  $to = "hello@azerteach.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $name = $_POST['name'];
  $subject = "contact via site web";
  $subject2 = "votre demande à Azerteach";
  $message = $name ." a écrit le message suivant:" . "\n\n" . $_POST['message'];
  $message2 = "Voici une copie de votre message:" . "\n\n" . $_POST['message'];

  $message .= "\n\n" . "Coordonnées de contact: " . "\n" ."email: ".$_POST['email']. "\n" . "telephone: ".$_POST['telephone'];
  $message .= "\n\n" . "Cette personne a entendu parler d'Azerteach par: ".$_POST['origin'];

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  $messageInfo = array('code'=>'success', 'content'=>'Votre message nous a bien été envoyé. Nous prendrons contact avec vous dans les plus bref délais.');
  // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!--Title-->
    <title>Azerteach - Nous contacter</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/smartphone.css">

    <!--Open Graphs-->
    <meta property="og:title" content="Azerteach - Nous contacter">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Cours particulier et études encadrées sur Bruxelles">
    <meta property="og:url" content="http://www.azerteach.com/contact">
   	<meta property="og:image" content="img/logo.png">
  </head>
  <body id="contact">

<?php include('includes/navbar.php'); ?>


  <div class="section section-contact-top">
    <div class="container">
      <img src="img/logo.png" class="landing-logo logo-small" alt="logo"/>
      <h1 class="page-title cgu">Contactez-nous !</h1>
    </div>
  </div>
<?php if(!isset($messageInfo)){ ?>
      <div class="section section-contact-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 matiere-details">
          <form class="form text-left" role="form" method="POST" action="">
            <input type="hidden" name="action" value="contact" />
            <p>L'équipe Azerteach se tient à votre disposition:</p>
            <p class="text-center">
              du <span class="text-blue">lundi au vendredi</span> de <span class="text-blue">14h à 19h30</span>.
            </p>
            <p>Pour toute demande d'informations, de réservations ou de prises de rendez-vous, nous vous invitons à compléter le <strong>formulaire</strong> ci-dessous, ou à nous contacter par téléphone au <strong>02 345 48 37</strong> durant nos heures de permanence.
            </p>
            <div class="row">
              <div class="col-sm-6">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" required/>
              </div>
              <div class="col-sm-6">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" id="name" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" class="form-control" id="telephone" />
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <textarea class="form-control" rows="5" name="message">Message
                  </textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <label for="origin">Comment avez-vous connu Azerteach ?</label>
                <select class="form-control" name="origin" id="origin">
                  <option selected disabled>Choisissez une option</option>
                  <option value="Moteur de recherche">Moteur de recherche</option>
                  <option value="Réseaux sociaux">Réseaux sociaux</option>
                  <option value="Structures officielles">Structures officielles (PMS, centre de médiation, école...)</option>
                  <option value="bouche à oreille">Bouche à oreille</option>
                  <option value="autre">Autre</option>
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
  <?php }
  elseif($messageInfo['code']=='success')
    {
      ?>
    <div class="section section-contact-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 matiere-details">
            <p class="alert alert-success"><?php echo $messageInfo['content']; ?></p>
            <p>L'équipe Azerteach se tient à votre disposition:</p>
            <p class="text-center">
              du <span class="text-blue">lundi au vendredi</span> de <span class="text-blue">14h à 19h30</span>.
            </p>
          </div>
        </div>
      </div>
    </div>
<?php
    }
    ?>

     <div class="section quotidien">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 matiere-details-blue">
            <div class="matiere-details">
              <h3>Mais où se situe Azerteach?</h3>
              <p>
              Avenue Winston Churchill 67, 1180 Uccle.
              </p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sfr!2sbe!4v1457007930868!6m8!1m7!1sM4UHIWLBcCtlbQKaNJplFw!2m2!1d50.81211303188493!2d4.352348887193548!3f200.28531933733302!4f3.7047464987667524!5f0.7820865974627469" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p>
              Nous serons ravis de vous acceuilir pour vous présenter nos cours particuliers, les études encadrées et nos locaux dédiés entièrement à une étude éfficace. Trouvez-nous sur <a href="https://www.google.be/maps/place/Azerteach/@50.812113,4.3523489,17z/data=!4m2!3m1!1s0x47c3c456057e8cb5:0x78baea270e81a3b0?hl=fr" target="_blank">Google Maps</a> et <a href="https://www.facebook.com/azerteach" target="_blank">Facebook</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="section quotidien">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 matiere-details-blue">
            <div class="matiere-details">
              <h3>Azerteach au quotidien</h3>
              <p>
               Découvrez en images nos, locaux, nos professeurs et l'ambiance lors de nos différentes activités.
              </p>
              <div class="to-galerie">
                <img src="./img/background-galerie.jpg" class="background-image-galerie"/>
                <a href="/galerie" class="btn btn-galerie">voir la galerie</a>
              </div>
            </div>
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
      <!--<img src="img/pointe-haute.png" class="background-image">-->
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
