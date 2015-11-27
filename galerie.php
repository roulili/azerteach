<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/smartphone.css">
  </head>
  <body id="galerie">

<?php include('includes/navbar.php'); ?>

  <div class="section section-galerie">
    <div class="container">
      <img src="img/logo.png" class="landing-logo logo-small" alt="logo"/>
      <h2 class="page-title"><small>notre quotidien en images</small></h2>
      <div class="galerie-wrapper">
        <div class="row" id="pics">
          <a href="img/gallery/big/img-1.jpg" class="gallery-item">
            <img src="img/gallery/small/img-1.jpg" />
          </a>
          <a href="img/gallery/big/img-2.jpg" class="gallery-item">
            <img src="img/gallery/small/img-2.jpg" />
          </a>
          <a href="img/gallery/big/img-3.jpg" class="gallery-item">
            <img src="img/gallery/small/img-3.jpg" />
          </a>
          <a href="img/gallery/big/img-4.jpg" class="gallery-item">
            <img src="img/gallery/small/img-4.jpg" />
          </a>
          <a href="img/gallery/big/img-5.jpg" class="gallery-item">
            <img src="img/gallery/small/img-5.jpg" />
          </a>
          <a href="img/gallery/big/img-6.jpg" class="gallery-item">
            <img src="img/gallery/small/img-6.jpg" />
          </a>
          <a href="img/gallery/big/img-7.jpg" class="gallery-item">
            <img src="img/gallery/small/img-7.jpg" />
          </a>
          <a href="img/gallery/big/img-8.jpg" class="gallery-item">
            <img src="img/gallery/small/img-8.jpg" />
          </a>
          <a href="img/gallery/big/img-9.jpg" class="gallery-item">
            <img src="img/gallery/small/img-9.jpg" />
          </a>
          <a href="img/gallery/big/img-10.jpg" class="gallery-item">
            <img src="img/gallery/small/img-10.jpg" />
          </a>
        </div>
        <div class="row">
          <p><a href="#" class="text-white load-more" >voir plus</a></p>
        </div>
      </div>
    </div>
  </div>
    
    <div class="section section-contact section-contact-galerie">
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
    <script src="js/magnific-popup.min.js"></script>

    <script>
    function initPopup()
    {
      $('.gallery-item').magnificPopup({
        type: 'image',
        gallery:{
          enabled:true
        }
      });      
    }
    initPopup();

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    $('.load-more').click(function(e){
      e.preventDefault();
      var j = $('#pics').children().length +5;
      for(i=$('#pics').children().length +1; i <= j; i++)
      {
        url = 'img/gallery/small/img-'+i+'.jpg';
        if(imageExists(url))
        {
          var img ='<a href="img/gallery/big/img-'+i+'.jpg" class="gallery-item" style="display:none"><img src="img/gallery/small/img-'+i+'.jpg" /></a>';
          $('#pics').append(img); 
        }
        else
        {
          $(this).addClass('disabled').attr('title', 'Il n\'y a pas d\'autres images pour l\'instant!')
        } 
      }
      $('#pics a').slideDown('slow');
      initPopup();
    });

    function imageExists(image_url){

    var http = new XMLHttpRequest();

    http.open('HEAD', image_url, false);
    http.send();

    return http.status != 404;

    }
    </script>
  </body>
</html>