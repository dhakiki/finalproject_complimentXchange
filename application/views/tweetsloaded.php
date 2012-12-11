<?php

echo '<div class="tweet"><ul>';
foreach( $tweets as $tweet)
{
	echo '<li>' . $tweet->text;
	echo '</li>';
}
echo '</ul></div>';