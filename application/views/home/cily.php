<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>complimentILY</title>
	<link href="../public/css/home_styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
</head>
<body>
<div id="header"><div style="margin-left: 20px;"><img src="../public/img/finalcomp_logo.png" /></div>
<div id="buttons">
	<table id="top">
		<tr>
			<td><a href = "cily"><div id="menubar">Home</div></a></td>
			<td><a href = "cily/about"><div id="menubar">About</div></a></td>
			<td><a href = "cily/add"><div id="menubar">Add School</div></a></td>

			<td><div style="margin-left:600px;"><a href = "cily/administer"><div id="menubar">Administer</div></a></div></td>
		</tr>
	</table>
</div>
</div>
<div id="pagebody">
		
		<div id="blurb" style="margin-left: 7px; width: 1050px;">
			<div align="left">Welcome!</div>
			<p>ComplimentXChange is place for students to do something nice anonymously.
				So, did you witness something or someone beautiful today? 
				Did someone step out of their way to help you and you never got to thank them? Share! Posts will be monitored, profanity and negativity will be disregarded.
				I hope you enjoy it! </p>
		</div>

		<table>
			<tr><td>
				<table>
					<tr><td>
						<table id="titles"><tr><td><img src="../public/img/finalcomp_small.png" height="60px" width="60px"></td><td><div style="margin-left:20px;"><h2>Dashboard</h2></div></td></tr></table>
						<div class="accordion">
						<div class="label">Top 5 Most Liked Posts on cXc!</div>
						<div class="content">
							
							<div id="tabs">
							<ul>
							        <li><a href="#tabs-1"><div align="center"><img src="../public/img/like.png" width="20px" height="20px"/></div><div align="center" style="font-size:12px;"><?php echo $posts[0]->num_likes; ?></div></a></li>
							        <li><a href="#tabs-2"><div align="center"><img src="../public/img/like.png" width="20px" height="20px"/></div><div align="center" style="font-size:12px;"><?php echo $posts[1]->num_likes; ?></div></a></li>
							        <li><a href="#tabs-3"><div align="center"><img src="../public/img/like.png" width="20px" height="20px"/></div><div align="center" style="font-size:12px;"><?php echo $posts[2]->num_likes; ?></div></a></li>
							        <li><a href="#tabs-4"><div align="center"><img src="../public/img/like.png" width="20px" height="20px"/></div><div align="center" style="font-size:12px;"><?php echo $posts[3]->num_likes; ?></div></a></li>
							        <li><a href="#tabs-5"><div align="center"><img src="../public/img/like.png" width="20px" height="20px"/></div><div align="center" style="font-size:12px;"><?php echo $posts[4]->num_likes; ?></div></a></li>
							    </ul>
<!--     <div id="tabs-1">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
    </div>
    <div id="tabs-2">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
    </div>
    <div id="tabs-3">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
    </div> -->

							<?php
								$counter=1;
								foreach($posts as $post)
								{
									if($counter>5) break;
									switch ($counter)
									{
										case 1: echo '<div id="tabs-1">'; break;
										case 2: echo '<div id="tabs-2">'; break;
										case 3: echo '<div id="tabs-3">'; break;
										case 4: echo '<div id="tabs-4">'; break;
										case 5: echo '<div id="tabs-5">'; break;
									}
								 	echo '<table><tr><td style="background-color: white;"><div id="listing">';
									echo '<table><tr><td><strong>To:</strong></td><td>'. $post->to . '</td></tr>';
									echo '<tr><td></td><td style="padding-top:10px; padding-bottom:10px;">' .  $post->message . '</td></tr>';
									echo '<tr><td></td><td><strong>Sincerely,</strong><br/>' . $post->sincerely . '</td></tr></table>';
									echo '<table><tr><td></td><td><p><strong>Posted on:    </strong></p></td><td><p><div style="margin-right: 40px;">'. $post->post_time . '</div></p></td>';
									echo '<td><strong><p><img src="img/like.png" width="20px" height="20px"/>    </strong></p></td><td><p><a class="like" postid="'. $post->post_id .'" href="">Like</a> (<span>'. $post->num_likes . '</span>)</p></td></tr></table>';
									echo '</div></td></tr></table></div>';

									$counter=$counter+1;
								}
							?>
						</div>

						</div>
						<div class="label">cXc on Twitter!</div>
						<div class="content">
								<div id="blurb">
								<table id="titles"><tr><td><img src="../public/img/finalcomp_small.png" height="60px" width="60px"></td><td><div style="margin-left:20px;"><h3>Check Out Our Recent Tweets!</h3></div></td></tr></table>
								<div id="tweets"></div>
								<p><a href="https://twitter.com/complimentily">Click here</a> to check out our Twitter page.</p>
								</div>
						</div>
						</div>
					</td>
					<td>
						<table id="titles"><tr><td><img src="../public/img/finalcomp_small.png" height="60px" width="60px"></td><td><div style="margin-left:20px;"><h2>Interactive Map</h2></div></td></tr></table>
						
						<div style="margin-left: 10px;">
						<div id="map"></div>
						<div id="mapblurb">
							<table>
								<tr><td>
								<h4>Search:</h4>
									<div id="searchstatus" style="margin-bottom:7px;"></div>
									<div style="margin-bottom:7px;"> Search cXc Schools by Full Name:</div><input type="text" style="width:250px; margin-right:10px;" id="schoolname"/><input type="button" id="search" value="search"/><br/><br/>
									<input type="button" id="geolocateme" value="cXc Schools In Your Area!" />
								</td><td>
								<div style="margin-left:80px;"><h4>Legend:</h4>
								<table><tr><td><img src="../public/img/pinkmarker.png" width="25px" height="25px"/></td><td><div style="margin-left: 10px;">High School</div></td></tr><tr><td><img src="../public/img/greenmarker.png" width="25px" height="25px"/></td><td><div style="margin-left: 10px;">College/University</div></td></tr>
									<tr><td></td></tr></table></div>
								</td></tr></table>

						</div>
						</div>
					</td></tr>
						
				</table>
		</table>
		
	<!-- 	<div id="blurb">
		<table id="titles"><tr><td><img src="../public/img/finalcomp_small.png" height="60px" width="60px"></td><td><div style="margin-left:20px;"><h3>Check Out Our Recent Tweets!</h3></div>
		<div id="tweets"></div>
		<p><a href="https://twitter.com/complimentily">Click here</a> to check out our Twitter page.</p>
		</div>
	
	



</div> -->




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
   <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- ajax request for tweets: -->
<script src="../public/js/tweets_loader.js"></script>

<script>

   $(function() {
        $( "#tabs" ).tabs();
    });

$('.content').eq(1).hide();
$('.label').eq(0).addClass('active');
$('.label').on('click', function() {
	if($(this).next().css('display')==='none')
	{
		$('.content').slideUp(300);
		$(this).next('.content').slideDown(300);
		$('.label').removeClass('active');
		$(this).addClass('active');
	}

});

$('a.like').click(function(e){
		console.log('liked');
		console.log($(this).attr("postid"));
		  var thisrecord = $( this ).closest( "div" );
 
      // get number of likes for current record and increment by 1
      var likes = parseInt( thisrecord.find( "span" ).html() ) + 1;
 		 thisrecord.find( "span" ).html( likes );
 		  $( this ).replaceWith( "Liked" );
		$.post('cily/like', {id: $(this).attr("postid")}, function (response) {
		
		});
		 e.preventDefault();
	});


</script>
<!-- <script src="../public/js/googlemaps.js"></script> -->
<script>
var points = {
		vegas: [40.0100804, -105.26904339999999]
	};
		
	var myOptions = {
		zoom: 3,
		center: new google.maps.LatLng(points["vegas"][0], points["vegas"][1]),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("map"), myOptions);


	<?php $schools= Cilyuser::load_schools();
	//dd($schools); 
	foreach ($schools as $school) { ?>

	if("<?php echo $school->highcollege ?>" === "H")
	{
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $school->loclat ?>, <?php echo $school->loclng ?>),
		title: "<?php echo $school->name ?>",
		icon: "img/pinkmarker.png"
	});
	}
	if("<?php echo $school->highcollege ?>" === "C")
	{
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $school->loclat ?>, <?php echo $school->loclng ?>),
		title: "<?php echo $school->name ?>",
		icon: "img/greenmarker.png"
	});
	}


	google.maps.event.addListener(marker, 'click', function(overlay, latLng)
    {

    	var lat= this.position.Ya; var lng=this.position.Za;
    	console.log(lat, lng);
		$.post('cily/findme', { lat: this.position.Ya, lng: this.position.Za  }, function (response) {
	     
			var clickedmark = new google.maps.Marker({
		position: new google.maps.LatLng(lat, lng),
		title: response
	});
	     	var infowindow = new google.maps.InfoWindow({
	    content: response + '<br /> <a href="cily/schoolfeed?school=' + response +'">Go to Page!</a>'
			});

		infowindow.open(map, clickedmark);

	   	});

    });

	marker.setMap(map);

	<?php } ?>
	
	$('#search').click(function(){

		console.log($('#schoolname').val());
		var school= $('#schoolname').val();
		$.post('cily/findmyschool', {sname: school}, function (response) {
	     console.log(response);
	     if(response==0) {
	     	console.log('not found');
	     	document.getElementById('searchstatus').innerHTML=school+' Not Found!';
	     }
		else {
	     var data=$.parseJSON(response);
	     var c=1, schoolname, lat, lng, type;
    	 $.each(data, function(i,item){
    	         switch(c) { case 1: schoolname=item; break;
    				case 2: lat=item; break;
    				case 3: lng=item; break; 
    			  	case 4: type=item; break;
    			  }
    			c=c+1;
    		});
    console.log(schoolname, lat, lng, type);
   			
				var searchedmark = new google.maps.Marker({
				position: new google.maps.LatLng(lat, lng),
				title: schoolname,
				icon: "../public/img/marker.png"
				});
		
	     	var infowindow = new google.maps.InfoWindow({
	    		content: schoolname + '<br /> <a href="cily/schoolfeed?school=' + schoolname +'">Go to Page!</a>'
			});
	     	searchedmark.setMap(map);
			infowindow.open(map, searchedmark);
			document.getElementById('searchstatus').innerHTML='Found '+schoolname;
		}
	   	});
	
	});

	$('#geolocateme').click(function() {
			if (navigator.geolocation) {
	
		//(used to test if health bar works if GeoLocate is not supported):
	
		// $('#geoLocateStatus').replaceWith('<div id="geoLocateStatus"><p>Geolocate activated!</div>') 
	
	navigator.geolocation.getCurrentPosition(function(position) {
		console.log(position);
		console.log(position.coords.latitude, position.coords.longitude);
		var lat = position.coords.latitude;
		var lang= position.coords.longitude;
		var position = {
			foundYou: [lat, lang]
			};
		var foundYou = new google.maps.LatLng(position["foundYou"][0], position["foundYou"][1]);

		var geocoder= new google.maps.Geocoder();
		var param1 = {
			'location': foundYou
		};

		geocoder.geocode(param1, function(results, status) {
		address=results[0].formatted_address;
		
			var infowindow = new google.maps.InfoWindow({
			content: address
		 });
		 	google.maps.event.addListener(marker, 'click', function() {
		 		infowindow.open(map, marker);
		 	});

		});

		var marker = new google.maps.Marker({
		position: new google.maps.LatLng(lat, lang),
		title: "You are here!",
		icon: "../public/img/marker.png"

		});
	

	
	


	// To add the marker to the map, call setMap() on the marker object;
	marker.setMap(map);	
	map.setCenter(foundYou);
	map.setZoom(10);
	
	});

	
} else {
	$('#geoLocateStatus').replaceWith('<div id="geoLocateStatus"><p>This browser doesn\'t support GeoLocate!!</div>')
}
});

	//map.setZoom(6);
	// To add the marker to the map, call setMap() on the marker object;

</script>


</body>
</html>