<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tekos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tekos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<!-- Navbar START -->
<?php include 'navbar.php';?>
<!-- Navbar END -->

<!-- Carousel START -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
 <!-- Indicators -->
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>
 <div class="carousel-inner" role="listbox">
   <div class="item active">
     <img class="first-slide" src="img/bild1.jpg" alt="First slide">
     <div class="container">
       <div class="carousel-caption">
         <h1>Example headline.</h1>
         <p><a class="btn btn-lg btn-primary" href="#" role="button">Contact us</a></p>
       </div>
     </div>
   </div>
   <div class="item">
     <img class="second-slide" src="img/bild2.jpg" alt="Second slide">
     <div class="container">
       <div class="carousel-caption">
         <h1>Another example headline.</h1>
         <p><a class="btn btn-lg btn-primary" href="#" role="button">Contact us</a></p>
       </div>
     </div>
   </div>
   <div class="item">
     <img class="third-slide" src="img/bild3.jpg" alt="Third slide">
     <div class="container">
       <div class="carousel-caption">
         <h1>One more for good measure.</h1>
         <p><a class="btn btn-lg btn-primary" href="#" role="button">Contact us</a></p>
       </div>
     </div>
   </div>
 </div>
 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
<!-- Carousel END -->
<!-- Marketing messaging and featurettes
   ================================================== -->
   <!-- Wrap the rest of the page in another container to center all the content. -->

<?php include 'marketing.php';?>
<?php include 'footer.php';?>
<?php include 'scripts.php';?>

  </body>
</html>
