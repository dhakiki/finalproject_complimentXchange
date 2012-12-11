<!DOCTYPE html>

<html>
<head>
	<title>complimentILY -- <?php echo $school_name;?></title>

	<style>

	form {
margin: 1em;
}
form input {
/*width: 20em;*/
/*height: 1.3em;*/
margin: 0 0 0.5em;
}
form textarea {
/*height: 20px;*/
overflow-y: scroll;
resize: none;

}
form label {
width: 5em;
/*height: 1.5em;*/
float: left;
}

h1 {
	font-size: 30px;
	font-family:"Arial", Arial, sans-serif;
}
table {
	vertical-align: top;
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
	height: 450px;
	width:620px;
	margin:0 auto;
	float: right;	/*align left*/
}
	table#top {
	background-color: #8A0808;
	margin-left:40px;
	padding-left:30px;
	padding-right: 30px;
}

	td#top {

	}
	#sform {
		width:530px;
		padding-left: 40px;
		padding-right: 30px;
		padding-top: 15px;
		padding-bottom:15px;
		background-color: #D8D8D8;
	}
	#forposting {
		
		
		position: absolute;
		z-index: 2;
		left:615px;
		top: 170px;
		background-color: #8A0808;
		width: 552px;
		max-height:350px;
		color: white;
		font-size: 14px;
			padding-left: 10px;
		padding-top: 10px;
		padding-bottom: 5px;
		overflow:fixed;
	}
	#line {
		/*background-color: #8A0808;*/
		width:400px;
		font: Century;
		font-size: 24px;
		color: #8A0808;
		padding-left:15px;
		padding-top: 15px;
	}
	#linee {
		background-color: #8A0808;
		height: 10px;
		width: 750px;
	}
	#post {
		width: 500px;
		height: 50px;
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 10px;
		padding-bottom: 10px;
		margin-top: 5px;
		margin-left: 5px;
		margin-right: 5px;
		margin-bottom: 5px;
	}

	#posts {
		background-color: #E6E6E6;
		width: 1100px;
		margin-left: 40px;
		margin-right: 2.5%;
		max-height:3000px;
		min-height: 400px;
		overflow: auto;
		padding-left: 15px;
		padding-top: 15px;
		padding-bottom: 15px;
		padding-right: 15px;
		font-family:"Arial", Arial, sans-serif;

	}
	#listing {
		background-color: white;
		width:510px;
	/*	margin-top: 15px;
		margin-left: 15px;
		margin-right: 15px;
		margin-bottom: 15px;*/
		padding-left: 5px;
		padding-top: 5px;
		padding-bottom: 5px;
		padding-right: 5px;
		font: Century;
		font-size: 18px;
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

	td#posts
	{
		/*height: 40px;*/
		padding-left: 5px;
		padding-top: 5px;
		padding-bottom: 5px;
		padding-right: 5px;
		vertical-align: top;
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

			<td><div style="margin-left:600px;"><a href = "cily/administer"><div id="menubar">Administer</div></a></div></td>
		</tr>
	</table>
</div>
</div>

<div id="posts">
	<div id="forposting">

			<div class="errors">
			{{ $errors->first('to', ':message')}}
			{{ $errors->first('message', ':message')}}
			{{ $errors->first('sincerely', ':message')}}
			</div>

			@if(Session::get('success'))
			<div>{{ Session::get('success') }}</div>
			@endif

	<form action="<?php echo URL::to('cily/addpost?school='.$school_name) ?>" method= "post">
	<h3>Submit a Compliment!</h3>
	<div><label>To:</label><textarea name="to" rows=2 cols=40%></textarea></div>
	<div><label>Message:</label><textarea name="message" cols="50%" rows="8%"></textarea></div>
	<div><label>Sincerely,</label><textarea name="sincerely" cols="40%" rows="2" ></textarea></div>
	<div ><input type="submit" value="Post!" ></div>
		</form>	

	</div>

<h1><?php echo $school_name;?></h1>
<div id="linee"></div>
<div id="line"><table><tr><td><strong>Filter posts by: </strong></td><td><select name = "filteroptions" id = "type">
		<option value='D'>Newest</option>
		<option value='L'>Number of Likes</option>
		<option value='P'>Person Addressed</option>
		<option value='A'>Oldest</option>
	</select></td></tr></table></div>
	<?php
		if(sizeof($posts)==0) { echo '<div id="listing"><p>No one has posted anything yet.</p></div>';}
		$numposts=0; echo '<table cellspacing="15" align="top">';
		foreach($posts as $post)
		{
			
			if(sizeof($posts)>2 && $numposts>2 && $numposts%2==1)
				{ echo '<tr>'; }
			if(sizeof($posts)>2 && $numposts<2)
			  {	echo '<tr>';	}	
			//dd($numposts%2);

			echo '<td style="background-color: white;"><div id="listing">';
			echo '<table><tr><td><strong>To:</strong></td><td>'. $post->to . '</td></tr>';
			echo '<tr><td></td><td style="padding-top:10px; padding-bottom:10px;">' .  $post->message . '</td></tr>';
			echo '<tr><td></td><td><strong>Sincerely,</strong><br/>' . $post->sincerely . '</td></tr></table>';
			echo '<table><tr><td></td><td><p><strong>Posted on:    </strong></p></td><td><p><div style="margin-right: 120px;">'. $post->post_time . '</div></p></td>';
			echo '<td><strong><p><img src="../img/like.png" width="20px" height="20px"/>    </strong></p></td><td><p><a class="like" postid="'. $post->post_id .'" href="">Like</a> (<span>'. $post->num_likes . '</span>)</p></td></tr></table>';
			echo '</div></td>';
 			$numposts=$numposts+1;
			
			if(sizeof($posts)>2 && $numposts>2 && $numposts%2==1)
				echo '</tr>';
			if(sizeof($posts)>2 && $numposts<2)
				echo '</td><td></td></tr>';			
			//dd($numposts%2);
		}
		echo '</table>';
		?>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>
	$('a.like').click(function(e){
		console.log('liked');
		console.log($(this).attr("postid"));
		  var thisrecord = $( this ).closest( "div" );
 
      // get number of likes for current record and increment by 1
      var likes = parseInt( thisrecord.find( "span" ).html() ) + 1;
 		 thisrecord.find( "span" ).html( likes );
 		  $( this ).replaceWith( "Liked" );
		$.post('like', {id: $(this).attr("postid")}, function (response) {
		
		});
		 e.preventDefault();
	});
		
</script>
</body>
</html>
