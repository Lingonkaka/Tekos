<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
      <h2>Enviromental</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
      <h2>Fast delivery</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
      <h2>Reliable</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

 <!-- Featurettes START -->
<hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-6">
      <h2 class="featurette-heading">Contact</h2>
      <p class="lead text-muted">Djurparksvägen 17<br>68300 Karleby<br>Finland</p>
      <p class="lead">Tero Koskinen: 123 4567890<br> <a href="mailto:tero.koskinen@tekos.fi">tero.koskinen@tekos.fi</a> </p>
      <p class="lead">Joakim Koskinen: 098 7654321<br> <a href="mailto:joakim.koskinen@tekos.fi">joakim.koskinen@tekos.fi</a> </p>
      </div>
    <div class="col-md-6">
      <div id="map"></div>
    </div>
  </div>
<hr class="featurette-divider">
   <!-- Featurettes END -->
<script>
 function initMap() {
   var uluru = {lat: 63.857461, lng: 23.319111};
   var map = new google.maps.Map(document.getElementById('map'), {
     zoom: 10,
     center: uluru
   });
   var marker = new google.maps.Marker({
     position: uluru,
     map: map
   });
 }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0eEcCMr_Q4fB7Y52XUnjIzf17pW-n_Gc&callback=initMap"></script>
