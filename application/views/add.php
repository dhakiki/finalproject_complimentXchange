<!DOCTYPE html>

<html>
<head>
	<title>complimentXchange -- Add User</title>
	<style>
	h1 {
	font-size: 35px;
	font-family:"Arial", Arial, sans-serif;
}
	table#top {
	background-color: #8A0808;
	margin-left:40px;
	padding-left:30px;
	padding-right: 30px;
}
td {
	vertical-align: top;
}
#pagebody {
	background-color: #E6E6E6;
	margin-left: 40px;
	padding-left: 15px;
	padding-top: 20px;
	width: 1115px;
	min-height: 500px;
	font-family:"Arial", Arial, sans-serif;
}
#menubar {
	background-color: #8A0808;
	color: white;
	font-family:"Arial", Arial, sans-serif;
	font-size: 18px;
	margin-right: 5px;
	margin-top: 5px;
	margin-bottom: 5px;	
	padding-left: 20px;
	padding-right: 20px;
	padding-top: 10px;
	padding-bottom: 10px;


}
#menubar:hover{
	background-color: white;
	color: #8A0808;
}
		#map { 
		padding-left: 50px;
		height: 300px;
		width:500px;
}
	#sform {
		width:530px;
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 15px;
		padding-bottom:15px;
		background-color: #D8D8D8;
	}

	#title {

	font: Century;
	font-size: 30px;
	/*width: 800px;*/
	float: left;
	margin-top: 20px;
	margin-bottom: 10px;
	margin-right: 700px;
	}

</style>
</head>
<body>
<div id="header"><div style="margin-left: 20px;"><img src="../img/finalcomp_logo.png" /></div>
<div id="buttons">
	<table id="top">
		<tr>
			<td><a href = "../cily"><div id="menubar">Home</div></a></td>
			<td><a href = "about"><div id="menubar">About</div></a></td>
			<td><a href = "add"><div id="menubar">Add School</div></a></td>

			<td><div style="margin-left:600px;"><a href = "administer"><div id="menubar">Administer</div></a></div></td>
		</tr>
	</table>
</div>
</div>
<div id="pagebody">
<h1>Add School</h1>
<div id="successorfail"> 
<p> <?php echo $message; ?> </p>

</div>
<table id="bod"> <tr><td>
<div style="margin:10px; text-align:left;">
	Enter your school and type (college/university) here! (no acronyms): <br>
	<input type="text" id="search-term" style="width:300px;" />
	<select name = "schooltype" id = "type">
		<option value='H'>High School</option>
		<option value='C'>College/University</option>
	</select>
	<input type="button" id="checkit" value="search" />
</div>
<div id="sform"></div>
</td><td>
<div id="map"></div>
</td></tr></table>



		<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="<?php echo URL::to_asset('js/underscore-min.js') ?>"> </script>
	<script src="../../public/js/googlemaps.js"></script>

</div>

</body>
</html>