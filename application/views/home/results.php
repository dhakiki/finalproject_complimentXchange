<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>complimentILY</title>
	<link href="../public/css/home_styles.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
</head>
<body>

<img src="../public/img/finalcomp_logo.png" />
<form action="<?php echo URL::to('cily/results') ?>" method="get">
	<input type= "text" style="width:300px;" name = "search-term">
	<select name = "schooltype">
		<option value="H">High School</option>
		<option value="C">College/University</option>
	</select>
	<input type= "button" value="Add!">
</form>
<!-- <div style="margin:10px; text-align:center;">
	Enter your school and type (college/university) here! (no acronyms): <br>
	<input type="text" id="search-term" style="width:300px;" />
	<input type="button" id="search" value="search" />
</div> -->

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

<!-- ajax request for tweets: -->
<script src="../public/js/tweets_loader.js"></script>

<?php foreach ($schools as $school) echo $school->name; ?>

<!-- <script src="../public/js/googlemaps.js"></script> -->

</body>
</html>