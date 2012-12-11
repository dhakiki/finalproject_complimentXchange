(function() {
var config = {
	url: 'http://localhost:8888/complimentily/startingover/public/'
};
//}
//; in ajax url: config + 'twitter/results'

	//$('#map').html('<img src="../img/ajax-loader.gif" align="middle">');

	('#checkit').on('click', function() {
		$.ajax({
		url: config.url + 'cily/twitter', //action name  //'<?php URL:: to(cily.fetch)?>', couldn't access controller, i tried!! :(
		success: function(response) {
			$('#tweets').html(response);
		},
		error: function(err1, err2, err3) {
			console.log(err1, err2, err3);
		}
	});

	});
	
})();