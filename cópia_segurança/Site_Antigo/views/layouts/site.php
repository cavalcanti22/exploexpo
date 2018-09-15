<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Explo Expo 2018 </title>

  <meta name="author" content="Gemini Web">

  <meta name="description" content="Feira Exploexpo 16 e 17 de outubro de 2018 - SP">

  <meta name="keywords" content="CONGRESSO E EXPOSIÇÃO INTERNACIONAL DE TECNOLOGIA, ENGENHARIA, APLICAÇÕES, EQUIPAMENTOS, LOGÍSTICA, PRODUTOS E SERVIÇOS DO SETOR DE EXPLOSIVOS E CONGÊNERES">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />

  <link rel="icon" href="<?=site_url()?>resources/site/images/explologo.png"  type="image/png">



  <!-- Social: Facebook / Open Graph -->
  <meta property="og:title" content="Explo Expo 2018">
  <meta property="og:description" content="Congresso e Exposição">
  <meta property="og:type" content="company">
  <meta property="og:image" content="resources/images/explologo.png">
  <meta property="og:url" content="http://exploexpo.com">

  <!-- Social: Twitter -->
  <meta name="twitter:card" content="summary_large_image"> <!-- aqui fica o tipo de card -->
  <meta name="twitter:title" content="Explo Expo 2018">
  <meta name="twitter:description" content="Congresso e Exposição">
  <meta property="twitter:image:src" content="http://exploexpo.com/resources/images/explologo.png">

  <link href="<?=site_url()?>resources/site/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?=site_url()?>resources/site/scripts/jquery-ui-1.11.2/jquery-ui.min.css" rel="stylesheet" />
  <link href="<?=site_url()?>resources/site/animate.min.css" rel="stylesheet" />
  <link href="<?=site_url()?>resources/site/style.css?version=12" rel="stylesheet" type="text/css" />
  <link href="<?=site_url()?>resources/site/estilos.css?version=12" rel="stylesheet" type="text/css" />
  <link href="<?=site_url()?>resources/site/modal.css" rel="stylesheet" type="text/css" />
  <script src="https://use.fontawesome.com/1d2254c17f.js"></script>
  <!-- Aditional Styles -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> -->

  

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script>
    function initialize() {
      var myLatlng = new google.maps.LatLng(51.518641, -0.168163);
      var map_options = {
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: myLatlng,
        scrollwheel: false,
        disableDefaultUI: true
      }

      var map = new google.maps.Map(document.getElementById('map_canvas'), map_options)
      var myIcon = new google.maps.MarkerImage('images/map_icon.png', null, null, null, new google.maps.Size(36,54));

      var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: myIcon
      });

      /* Remove if you dont want B/W Google Map */
/*
var styles = [
{
featureType: "all",
stylers: [
{ saturation: -100 }
]
}
];

map.setOptions({styles: styles});
*/
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- Google Map Ends! -->
<script>$(document).ready(function() {

  $('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-img-mobile',
    image: {
      verticalFit: true
    }
    
  });

  $('.image-popup-fit-width').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    image: {
      verticalFit: false
    }
  });

  $('.image-popup-no-margins').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

});</script>
</head>

<body>

  <?php require $view.".php"; ?>

  <!-- footer -->
  <div class="footer">
    <div class="container">

      <p>Copyright 2017 - Desenvolvido por <a href="http://www.geminiweb.com.br" target="_blank">Gemini Web Floripa <i class="fa fa-whatsapp" aria-hidden="true"></i> 48 99143-7388</a></p>

    </div>
  </div>
  <!-- footer ends! -->

</div>

<!-- back to top -->
<div class="back">
  <div class="container">

    <a href="#top"><i class="fa fa-angle-up fa-3x"></i></a>

  </div>
</div>
<!-- back to top ends! -->

<!-- contact form overlay popup -->
<div class="overlay" style="display: none;">

  <div class="contact-form">

    <h3>Contact Us</h3>
    <p>We will get back to you as soon as possible</p>

    <!-- contact form -->
    <div class="form">
      <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Name"/>
        <input type="text" name="email" placeholder="Email"/>
        <textarea name="message" placeholder="Message"></textarea>
        <button name="submit" type="submit">Send Message</button>

      </form>
    </div>
    <!-- contact form ends! -->

    <!-- Do Not Remove! -->
    <p class="error"></p>
    <p class="message"></p>
    <!-- Do Not Remove! Ends! -->

    <a href="#" class="close-contact-form"><i class="fa fa-times fa-lg"></i></a>
  </div>

</div>
<!-- contact form overlay popup ends! -->

<!-- scripts -->
<script src="<?=site_url()?>resources/site/scripts/jquery-1.11.0.min.js"></script>
<script src="<?=site_url()?>resources/site/scripts/jquery-ui-1.11.2/jquery-ui.min.js"></script>
<script src="<?=site_url()?>resources/site/scripts/flexslider/jquery.flexslider-min.js"></script>
<script src="<?=site_url()?>resources/site/scripts/jquery.parallax-1.1.3.js"></script>
<script src="<?=site_url()?>resources/site/scripts/jquery.inview.min.js"></script>
<script src="<?=site_url()?>resources/site/scripts/form.js"></script>
<script src="<?=site_url()?>resources/site/scripts/theme.js"></script>
<script src="<?=site_url()?>resources/site/scripts/modal.js"></script>
<!-- scripts ends! -->

</body>
</html>