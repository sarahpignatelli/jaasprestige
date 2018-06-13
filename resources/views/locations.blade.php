@extends('layouts.app')
@section('title', 'JAAS Prestige | Locations')
@section('content')

<!-- Include the use of the Locations Controller -->
<?php 
use App\Http\Controllers\LocationsController;
?>

<!-- In-Page Styling -->
<style>
    #map {
        width: 100% !important;
        height: 600px !important;
    }
</style>

    <!-- Including the Google Map with API Key -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8MnyEDv6jwBbRJbjr6oez0kAc6MJtGXg&callback=initMap">
    </script>
    
    <!-- Placing map on the page -->
    <div id="map">
	</div>
	
	<!-- Setting the map's centre and zoom -->
    <script type="text/javascript">
        function initMap() {
            var melbourne = {lat:-37.818260, lng:144.967754};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 14,
              center: melbourne
            });
        
            //Putting all markers in an array
            var carList = <?php echo json_encode(LocationsController::getCarListAsArray());?>;    
            for(let index=0; index<carList.length; index++) {
                var latC = carList[index][2]
                var lngC = carList[index][3]
                var marker = {
                coordinates:{lat: latC, lng: lngC},
                contentString:"<div class=\"text-center\"><h2>" + carList[index][1] + "</h2>" + carList[index][0] + "<br><br>@guest<a class=\"join-now text-center\" href=\"{{ url('register') }}\">{{ __('GET PRESTIGE') }}</a>@else<a class=\"join-now\" href=\"{{ url('booking') }}\">{{ __('GET PRESTIGE') }}</a>@endguest</div>"
                };
                addMarker(marker);
            }

            //Add marker on the map
            function addMarker(location){
                var marker = new google.maps.Marker({
                    position:location.coordinates,
                    map:map
                });

                //Put a window on marker when pressed
                if(location.contentString){
                    var infoWindow = new google.maps.InfoWindow({
                        content:location.contentString
                    });
    
                    marker.addListener('click', function(){
                        infoWindow.open(map, marker);
                    });
                }
            }
            
            //Creating new infoWindow
            infoWindow = new google.maps.InfoWindow;
            
            // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent("You are here!");
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      // Validation text if Geolocation does not work
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'GPS service failed. You must give the browser permission to use your location!' :
                              'Your browser does not support geolocation.');
        // Open the Validation text inside an InfoWindow                      
        infoWindow.open(map);
      }
    </script>

 
@endsection