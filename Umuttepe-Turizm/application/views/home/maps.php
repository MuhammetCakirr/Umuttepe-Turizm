<!DOCTYPE html>
<html>
<head>
	<title>Harita</title>
	<style>
		html, body {
			height: 100%;
			margin: 0px;
			padding: 0px;
		}
		#map_canvas {
			height: 100%;
		}
	</style>
</head>
<body>
<div id="map_canvas"></div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		var directionDisplay;
		var directionsService = new google.maps.DirectionsService();
		var gmarkers = [];
		var map = null;
		var startLocation = null;
		var endLocation = null;
		var waypts = [];
		var infowindow = new google.maps.InfoWindow({
			size: new google.maps.Size(150, 50)
		});

		function createMarker(latlng, label, html, color) {
			var contentString = '<b>' + label + '</b><br>' + html;
			var marker = new google.maps.Marker({
				position: latlng,
				map: map,
				title: label,
				label: label,
				zIndex: Math.round(latlng.lat() * -100000) << 5
			});
			marker.myname = label;
			gmarkers.push(marker);

			google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent(contentString);
				infowindow.open(map, marker);
			});
			return marker;
		}

		function initialize() {
			directionsDisplay = new google.maps.DirectionsRenderer({
				suppressMarkers: true
			});
			var chicago = new google.maps.LatLng(41.850033, -87.6500523);
			var myOptions = {
				zoom: 6,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: chicago
			}
			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
			directionsDisplay.setMap(map);
			calcRoute();
		}

		function calcRoute() {
			const request = {
				origin: "Bicknacre",
				destination: "Bicknacre",
				waypoints: [
					<?php
					// PHP kodları buraya yerleştirin, yönlendirme noktalarını döngüyle oluşturun
					$waypoints = array(
						array("lat" => 51.744915, "lng" => 0.573389),
						array("lat" => 51.775197, "lng" => 0.592035),
						array("lat" => 51.731653, "lng" => 0.665789),
						array("lat" => 51.671305, "lng" => 0.714838),
						array("lat" => 51.65319, "lng" => 0.601305),
					);
					foreach ($waypoints as $waypoint) {
						echo "{ location: new google.maps.LatLng(" . $waypoint['lat'] . ", " . $waypoint['lng'] . "), stopover: false },";
					}
					?>
				],
				optimizeWaypoints: true,
				travelMode: google.maps.DirectionsTravelMode.DRIVING
			};
			directionsService.route(request, function(response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
					directionsDisplay.setDirections(response);
					var route = response.routes[0];
					var bounds = new google.maps.LatLngBounds();
					var route = response.routes[0];
					startLocation = new Object();
					endLocation = new Object();
					var polyline = new google.maps.Polyline({
						path: [],
						strokeColor: '#FF0000',
						strokeWeight: 3
					});


					var legs = response.routes[0].legs;
					for (i = 0; i < legs.length; i++) {
						if (i == 0) {
							startLocation.latlng = legs[i].start_location;
							startLocation.address = legs[i].start_address;
						} else {
							waypts[i] = new Object();
							waypts[i].latlng = legs[i].start_location;
							waypts[i].address = legs[i].start_address;
						}
						endLocation.latlng = legs[i].end_location;
						console.log("[" + i + "] " + endLocation.latlng.toUrlValue(6));
						endLocation.address = legs[i].end_address;
						var steps = legs[i].steps;
						for (j = 0; j < steps.length; j++) {
							var nextSegment = steps[j].path;
							for (k = 0; k < nextSegment.length; k++) {
								polyline.getPath().push(nextSegment[k]);
								bounds.extend(nextSegment[k]);
							}
						}
					}
					var waypoints = polyline.GetPointsAtDistance(5000);
					for (var i = 0; i < waypoints.length; i++) {
						createMarker(waypoints[i], "" + (i + 1), (i + 1) * 5 + " km");
					}
				} else {
					alert("Yönler response " + status);
				}
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		// ported to v3 from the epoly library by Mike Williams
		// http://econym.org.uk/gmap/epoly.htm
		// === A method which returns an array of GLatLngs of points a given interval along the path ===
		google.maps.Polyline.prototype.GetPointsAtDistance = function(metres) {
			var next = metres;
			var points = [];
			// some awkward special cases
			if (metres <= 0) return points;
			var dist = 0;
			var olddist = 0;
			for (var i = 1; (i < this.getPath().getLength()); i++) {
				olddist = dist;
				dist += google.maps.geometry.spherical.computeDistanceBetween(this.getPath().getAt(i), this.getPath().getAt(i - 1));
			}
	})
</script>
<script src="http://maps.google.com/maps/api/js?key=###&libraries=geometry"></script>
</body>
</html>
