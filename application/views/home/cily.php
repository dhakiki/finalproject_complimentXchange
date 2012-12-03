<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>complimentILY</title>
	<link href="../public/css/home_styles.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
</head>
<body>

<img src="../public/img/CILY_FULL.jpg" />
<div style="margin:10px; text-align:center;">
	<input type="text" id="search-term" style="width:300px;" />
	<input type="button" id="search" value="search" />
</div>

<div style="margin:10px; text-align:center;">
	Lat: <input type="text" id="lat" />
	Long: <input type="text" id="lng" />
</div>

<div id="map_header"><img src="../public/img/CILY_LOGO-1.jpg" width="100" height="50"/> across the US:</div>
<div id="tweets_header"><img src="../public/img/CILY_LOGO-1.jpg" width="100" height="50"/> on Twitter:</div>
<div id="map"></div>
<div id="tweets"></div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
(function() {
	var points = {
		vegas: [36.05178307933835, -115.17840751953122]
	};
		
	var myOptions = {
		zoom: 4,
		center: new google.maps.LatLng(points["vegas"][0], points["vegas"][1]),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("map"), myOptions);
	
	
	//this section allows the user to search for an address and Google Maps will geocode it for you
	//uses jQuery, but you dont have to. I am showing that you can use jQuery with Google Maps
	$('#search').click(function() {
		var searchTerm = $('#search-term').val();
		var geocoder = new google.maps.Geocoder();
		var param1 = {
			'address': searchTerm
		};
				
		geocoder.geocode(param1, function(results, status) {
			var latlng = results[0].geometry.location;
			map.setCenter(latlng);
			
			var marker = new google.maps.Marker({
				position: results[0].geometry.location
			});
			
			marker.setMap(map);
			
			//put the coordinates in the input text boxes at the bottom of the page
			$('#lat').val(latlng.lat());
			$('#lng').val(latlng.lng());
		});
	});
		
})();
</script>

</body>
</html>