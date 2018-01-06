<<<<<<< HEAD
<<<<<<< HEAD

		<script>
			// Note: This example requires that you consent to location sharing when
			// prompted by your browser. If you see the error "The Geolocation service
			// failed.", it means you probably did not give permission for the browser to
			// locate you.
			var map, infoWindow, currentPos, marker, geocoder, formattedAddress;
			function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: 27.7172, lng: 85.3240},
					zoom: 11
				});

				infoWindow = new google.maps.InfoWindow;
				
				map.addListener('click',function(event){
					placeMarker(event.latLng);
				});

				document.getElementById('submit').addEventListener('click', function() {
          			geocodeAddress();
        		});

				geocoder = new google.maps.Geocoder();
				
				// Try HTML5 geolocation.
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(function(position) {
						var pos = {
							lat: position.coords.latitude,
							lng: position.coords.longitude
						};

						infoWindow.setPosition(pos);
						infoWindow.setContent('Your Location.');
						infoWindow.open(map);
						map.setCenter(pos);
						currentPos = pos;
					}, function() {
						handleLocationError(true, infoWindow, map.getCenter());
					});
				} else {
					// Browser doesn't support Geolocation
					handleLocationError(false, infoWindow, map.getCenter());
				}
			}

			function placeMarker(position){

				if (marker == null){
					marker = new google.maps.Marker({
						position: position,
						map: map
					});
				}else{
					marker.setPosition(position);
				}
					map.setZoom(16);
					map.setCenter(position);
					geocodeLatLng();
					document.getElementById("hiddenCoord").value = marker.getPosition().lat() + "," + marker.getPosition().lng();
					// document.getElementById("hiddenLng").value = marker.getPosition().lng();
			}

			function geocodeLatLng() {
        		var latlng = marker.position;
		        geocoder.geocode({'location': latlng}, function(results, status) {
		          if (status === 'OK') {
		            if (results[0]) {
		             document.getElementById("reportLocation").value = results[0].formatted_address;
		            } else {
		              window.alert('No results found');
		            }
		          } else {
		            window.alert('Geocoder failed due to: ' + status);
		          }
		        });
		      }

		    function geocodeAddress() {
		        var address = document.getElementById('searchLocation').value;
		        geocoder.geocode({'address': address}, function(results, status) {
		          if (status === 'OK') {
		          	placeMarker(results[0].geometry.location);
		          } else {
		            alert('Geocode was not successful for the following reason: ' + status);
		          }
		        });
		    }

			function handleLocationError(browserHasGeolocation, infoWindow, pos) {
				infoWindow.setPosition(pos);
				infoWindow.setContent(browserHasGeolocation ?
															'Error: The Geolocation service failed.' :
															'Error: Your browser doesn\'t support geolocation.');
				infoWindow.open(map);
			}
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC47ivKjL5SHAC2mQzc6FnConKR6jLeiss &callback=initMap">
		</script>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/
	ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	</body>
=======

		<script>
			// Note: This example requires that you consent to location sharing when
			// prompted by your browser. If you see the error "The Geolocation service
			// failed.", it means you probably did not give permission for the browser to
			// locate you.
			var map, infoWindow, currentPos, marker, geocoder, formattedAddress;
			function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: 27.7172, lng: 85.3240},
					zoom: 11
				});

				infoWindow = new google.maps.InfoWindow;
				
				map.addListener('click',function(event){
					placeMarker(event.latLng);
				});

				document.getElementById('submit').addEventListener('click', function() {
          			geocodeAddress();
        		});

				geocoder = new google.maps.Geocoder();
				
				// Try HTML5 geolocation.
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(function(position) {
						var pos = {
							lat: position.coords.latitude,
							lng: position.coords.longitude
						};

						infoWindow.setPosition(pos);
						infoWindow.setContent('Your Location.');
						infoWindow.open(map);
						map.setCenter(pos);
						currentPos = pos;
					}, function() {
						handleLocationError(true, infoWindow, map.getCenter());
					});
				} else {
					// Browser doesn't support Geolocation
					handleLocationError(false, infoWindow, map.getCenter());
				}
			}

			function placeMarker(position){

				if (marker == null){
					marker = new google.maps.Marker({
						position: position,
						map: map
					});
				}else{
					marker.setPosition(position);
				}
					map.setZoom(16);
					map.setCenter(position);
					geocodeLatLng();
					document.getElementById("hiddenCoord").value = marker.getPosition().lat() + "," + marker.getPosition().lng();
					// document.getElementById("hiddenLng").value = marker.getPosition().lng();
			}

			function geocodeLatLng() {
        		var latlng = marker.position;
		        geocoder.geocode({'location': latlng}, function(results, status) {
		          if (status === 'OK') {
		            if (results[0]) {
		             document.getElementById("reportLocation").value = results[0].formatted_address;
		            } else {
		              window.alert('No results found');
		            }
		          } else {
		            window.alert('Geocoder failed due to: ' + status);
		          }
		        });
		      }

		    function geocodeAddress() {
		        var address = document.getElementById('searchLocation').value;
		        geocoder.geocode({'address': address}, function(results, status) {
		          if (status === 'OK') {
		          	placeMarker(results[0].geometry.location);
		          } else {
		            alert('Geocode was not successful for the following reason: ' + status);
		          }
		        });
		    }

			function handleLocationError(browserHasGeolocation, infoWindow, pos) {
				infoWindow.setPosition(pos);
				infoWindow.setContent(browserHasGeolocation ?
															'Error: The Geolocation service failed.' :
															'Error: Your browser doesn\'t support geolocation.');
				infoWindow.open(map);
			}
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC47ivKjL5SHAC2mQzc6FnConKR6jLeiss &callback=initMap">
		</script>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/
	ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	</body>
>>>>>>> 188cb3248df141a88aa1e323e6db522eccfa7ac0
=======

		<script>
			// Note: This example requires that you consent to location sharing when
			// prompted by your browser. If you see the error "The Geolocation service
			// failed.", it means you probably did not give permission for the browser to
			// locate you.
			var map, infoWindow, currentPos, marker, geocoder, formattedAddress;
			function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: 27.7172, lng: 85.3240},
					zoom: 11
				});

				infoWindow = new google.maps.InfoWindow;
				
				map.addListener('click',function(event){
					placeMarker(event.latLng);
				});

				document.getElementById('submit').addEventListener('click', function() {
          			geocodeAddress();
        		});

				geocoder = new google.maps.Geocoder();
				
				// Try HTML5 geolocation.
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(function(position) {
						var pos = {
							lat: position.coords.latitude,
							lng: position.coords.longitude
						};

						infoWindow.setPosition(pos);
						infoWindow.setContent('Your Location.');
						infoWindow.open(map);
						map.setCenter(pos);
						currentPos = pos;
					}, function() {
						handleLocationError(true, infoWindow, map.getCenter());
					});
				} else {
					// Browser doesn't support Geolocation
					handleLocationError(false, infoWindow, map.getCenter());
				}
			}

			function placeMarker(position){

				if (marker == null){
					marker = new google.maps.Marker({
						position: position,
						map: map
					});
				}else{
					marker.setPosition(position);
				}
					map.setZoom(16);
					map.setCenter(position);
					geocodeLatLng();
					document.getElementById("hiddenCoord").value = marker.getPosition().lat() + "," + marker.getPosition().lng();
					// document.getElementById("hiddenLng").value = marker.getPosition().lng();
			}

			function geocodeLatLng() {
        		var latlng = marker.position;
		        geocoder.geocode({'location': latlng}, function(results, status) {
		          if (status === 'OK') {
		            if (results[0]) {
		             document.getElementById("reportLocation").value = results[0].formatted_address;
		            } else {
		              window.alert('No results found');
		            }
		          } else {
		            window.alert('Geocoder failed due to: ' + status);
		          }
		        });
		      }

		    function geocodeAddress() {
		        var address = document.getElementById('searchLocation').value;
		        geocoder.geocode({'address': address}, function(results, status) {
		          if (status === 'OK') {
		          	placeMarker(results[0].geometry.location);
		          } else {
		            alert('Geocode was not successful for the following reason: ' + status);
		          }
		        });
		    }

			function handleLocationError(browserHasGeolocation, infoWindow, pos) {
				infoWindow.setPosition(pos);
				infoWindow.setContent(browserHasGeolocation ?
															'Error: The Geolocation service failed.' :
															'Error: Your browser doesn\'t support geolocation.');
				infoWindow.open(map);
			}
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC47ivKjL5SHAC2mQzc6FnConKR6jLeiss &callback=initMap">
		</script>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/
	ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	</body>
>>>>>>> 188cb3248df141a88aa1e323e6db522eccfa7ac0
</html>