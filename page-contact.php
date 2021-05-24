
<?php get_header();?><!-- header.php file -->

    
<?php 
        /*
            Template name: Contact page 
        */
?>

<div class="row text-muted mt-3">
  <div class="col-xs-12 col-md-8 mt-3">
    <div id="mapid"></div>
  </div>
  <div class="col-xs-12 col-md-4 mt-3">
  <h6 class="text-uppercase text-start fw-bold">Contact</h6>
      <p><i class="fas fa-home me-3"></i> Cagliari, CA 09128, IT</p>
      <p><i class="fas fa-envelope me-3"></i> neurolab@info.com</p>
      <p><i class="fas fa-phone me-3"></i> + 39 234 567 88</p>
      <p><i class="fas fa-print me-3"></i> + 39 234 567 89</p>    
  </div>
</div>
<div class="row">
  <div class="col-12">
    <?php require("formcontact.php"); ?><!-- form.php file -->
  </div>
</div>



<?php get_footer(); ?>   <!-- footer.php file -->

<script>
/* 
  Avrei voluto mettere questo script nella file /js/neurolab.js
  ma pur essendo importato nel file functions non funziona.
*/
const mymap = L.map('mapid').setView([39.217, 9.1137], 15);
const marker = L.marker([39.217, 9.1137]).addTo(mymap);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  maxZoom: 18,
  id: 'mapbox/streets-v11',
  tileSize: 512,
  zoomOffset: -1,
  accessToken: 'pk.eyJ1IjoiZmFiaTBwaSIsImEiOiJja24wMWdmczUwODR3Mm9scnN6YzNvZ3R4In0.qnNRbgYMZfBTecqYIYchRQ'
}).addTo(mymap)


marker.bindPopup("<b>NeuroLab!</b><br>Venite a trovarci.").openPopup();

</script>