(function() {
	var points = {
		center: [40.0100804, -105.26904339999999]
	};
		
	var myOptions = {
		zoom: 4,
		center: new google.maps.LatLng(points["center"][0], points["center"][1]),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("map"), myOptions);
	
	
	//this section allows the user to search for an address and Google Maps will geocode it for you
	//uses jQuery, but you dont have to. I am showing that you can use jQuery with Google Maps
	$('#checkit').click(function() {
		var searchTerm = $('#search-term').val().toUpperCase();
		//if (str.toLowerCase().indexOf("yes") >= 0)
		if(searchTerm.indexOf("UNIVERSITY")>= 0 || searchTerm.indexOf("COLLEGE")>= 0 || searchTerm.indexOf("HIGH SCHOOL")>= 0)
		{
			var geocoder = new google.maps.Geocoder();
		var param1 = {
			'address': searchTerm
		};
		var html=""; var result_name;	
		geocoder.geocode(param1, function(results, status) {
			console.log(results);
			console.log(results.length);
			console.log(results[0].address_components[0].long_name);
			console.log(results[0].address_components[3].long_name);
			
			
			for(var i=0; i<results.length; i++)
			{
				var latlng = results[i].geometry.location;
				console.log(results);
				html+='<table cellpadding="10"><tr><td><input type="button" class="choice" value = "Map It!"/></td><td>School: <input type="text" class="nm" style="width:200px;" value="';
				html+=results[i].address_components[0].long_name;
				html+='"readonly/></td><td>Type: <input type="text" class="tp"  style="width:20px;" value="'+$('#type option:selected').val();
				html+='"readonly/></td><td>Coordinates: <br/>(<input type="text" class="lat" style="width:25px;" value="'+latlng.lat();
				html+='"readonly/>,<input type="text" class="lng" style="width:25px;" value="'+latlng.lng();
				html+='"readonly/>)</td></tr></table>';

				// html+='<table><tr><td>School: <p class="nm">';
				// html+=results[i].address_components[0].long_name;
				// html+='</p></td><td>Type: <p class="tp">'+$('#type option:selected').val();
				// html+='</p></td><td>City: <p class="city">'+ results[i].address_components[3].long_name+'</p></td></tr><br/><tr><td>Coordinates: </td></tr><tr><td>Latitude: <p class="lat">'+latlng.lat();
				// html+='</p></td><td>Longitude: <p class="lng">'+latlng.lng();
				// html+='</p></td><td><input type="button" class="choice" value = "This one!"/></td></tr></table>';

				// html+='<table cellpadding="10">';
				// 	html+='<tr><input type="button" class="choice" value = "Map It!"/></tr>';
				// html+='<tr><td><strong>School:</strong><div class="nm">'+results[i].address_components[0].long_name+'</div></td>';
				// html+='<td><strong>Type:</strong><div class="tp">'+$('#type option:selected').val()+'</div></td>';
				// html+='<td><strong>Coordinates: <br/></strong><div class="lat">'+latlng.lat()+'</div><div class="lng">'+latlng.lng()+'</div></td></tr>';
				// html+='</table>';
				var marker = new google.maps.Marker({
				position: results[i].geometry.location
				});
				if(i==0) map.setCenter(latlng);
				marker.setMap(map);
				map.setZoom(5);
			}
			
			document.getElementById('sform').innerHTML=html;
			
			//map.setZoom(5);
			
			
			
			
			
			//put the coordinates in the input text boxes at the bottom of the page
			// $('#lat').val(latlng.lat());
			// $('#lng').val(latlng.lng());
			// $('#lat').eq(0).hide();
			});
			// $('#sname').val(searchTerm);

			// //#selectId>option:selected
			// $('#stype').val($('#type option:selected').val());
			//Cilyuser:: add_user()
			document.getElementById('successorfail').innerHTML='';
		}
		else document.getElementById('successorfail').innerHTML='<p>Must include FULL school name to be a valid search.</p>';

		
	});
	var name, stype, lt, lg,city, state, country;
	$('#sform').on('click', 'input.choice', function() {
			console.log('working');
			console.log($(this).parents('table').find('input.lat').val());
			console.log($(this).parents('table').find('input.lng').val());
			console.log($(this).parents('table').find('input.nm').val());
			console.log($(this).parents('table').find('input.tp').val());
			var marker = new google.maps.Marker({
		position: new google.maps.LatLng($(this).parents('table').find('input.lat').val(), $(this).parents('table').find('input.lng').val()),
		title: $(this).parents('table').find('.nm').text()
	});
	//<a href="results?search-term=' . $user->username . '">
	name = $(this).parents('table').find('input.nm').val();
	stype =$(this).parents('table').find('input.tp').val();
	lt = $(this).parents('table').find('input.lat').val();
	lg = $(this).parents('table').find('input.lng').val();
	
	console.log(name, stype, lt, lg);
	var infowindow = new google.maps.InfoWindow({
	    content: '<div style= "font:Century; size:12px;">' + name + '<br/><a href= "added?search-term='+ name + '&schooltype=' + stype + '&lat=' + lt + '&lng=' +lg + '&ct=' + city +'">ADD!</a></div>'
	});
	infowindow.open(map, marker);
	google.maps.event.addListener(marker, 'click', function() {
	  infowindow.open(map, marker);
	});

	marker.setMap(map);
	})


		
})();