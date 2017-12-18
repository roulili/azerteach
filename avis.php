<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Azerteach - Votre avis</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/smartphone.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--Open Graphs-->
    <meta property="og:title" content="Azerteach - Votre avis">
    <meta property="og:type" content="website" >
    <meta property="og:description" content="Cours particulier et études encadrées sur Bruxelles">
    <meta property="og:url" content="http://www.azerteach.com/avis">
   	<meta property="og:image" content="./img/logo.png">

    <!--ReCaprcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>

<body id="avis">

	<?php include ("includes/navbar.php");?>

	<div class="section section-contact-top">
      <div class="container">
        <img src="img/logo.png" class="landing-logo logo-small" alt="logo"/>
        <h1 class="page-title">Pourquoi Azerteach ?<br /><small>Votre avis compte pour nous</small></h1>
      </div>
      <div class="text-center col-md-12"><br>
        	<button class="btn btn-primary text-center" id="avisBtn" data-toggle="modal" data-target="#addAvis">Donne ton avis!</button>
        </div>
    </div>

	<div class="section">
    	<div class="row">
       <!-- <div class="col-md-4 modal">
        <form name="message" action="" role="form">
            <div class="return"></div>
            <h3 class="text-center">Que pensez vous de nos services?</h3>
            <div class="form-group">
                <input type="text" name="user" id="user" placeholder="Votre nom ou pseudo" class="form-control">
                <textarea name="usermsg" type="text" id="usermsg" size="250" class="form-control" placeholder="Votre manifique message"></textarea>
                <div class="g-recaptcha" data-sitekey="6LeI9RkTAAAAAB6VAwcops63XDDomq1XZc_YmjAp"></div>
                <input name="submitmsg" type="submit"  id="submitmsg" value="Commenter" class="btn btn-primary">
            </div>
        </form>
        </div>-->

        <!-- Modal -->
        <div id="addAvis" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <form name="message" action="" role="form">
                    <div class="return"></div>
                    <h3 class="text-center">Que pensez vous de nos services?</h3>
                    <div class="form-group">
                        <input type="text" name="user" id="user" placeholder="Votre nom ou pseudo" class="form-control">
                        <textarea name="usermsg" type="text" id="usermsg" size="250" class="form-control" placeholder="Votre manifique message"></textarea>
                        <div class="g-recaptcha" data-sitekey="6Lcg9hkTAAAAAIn_vSEsjXc9dedrTtxYeJbMOXfD"></div>
                        <input name="submitmsg" type="submit"  id="submitmsg" value="Commenter" class="btn btn-primary">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        <div id="avis-box" class="col-md-8 col-md-offset-2">
        </div>
        </div>
    </div>

	<?php include ("includes/section-map.php");?>
	<?php include ("includes/footer.php");?>
	 <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/scrollspy.js"></script>
    <script src="js/rouli.js"></script>
	<script src="js/avis.js"></script>
</body>
</html>
