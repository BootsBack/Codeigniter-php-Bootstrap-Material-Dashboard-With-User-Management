<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
       <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Google Map</h4>
                </div>
                <div class="card-body">
                  <div id="map"></div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
	   <script>
	  $(function(){
	  	$("#template-map").addClass("active");
	  });
	  </script>
	      <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
    async defer></script>