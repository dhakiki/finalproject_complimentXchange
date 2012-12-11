<?php

//require "application/libraries/twitter.php";

$twitter = new Twitter();
		$tweets = $twitter->getTweetsFromJSON('complimentily');
		echo '<ul>';
		foreach($tweets as $tweet) {
			echo '<li>';
			echo $tweet->text;
			echo '</li>';
		}
		echo '</ul>';