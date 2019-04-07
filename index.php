<?php

	include_once('grabber.php');

	$data = explode("<font size='6' color='#FFFFFF'><a style='color:#004b8c;text-decoration:none'>", grabbing('http://68.183.185.124/hongkong/'));

	$string = substr($data[1], 0,4);


	echo ('<h2> Today\'s number is: <br/></h2>');
	echo('<strong>'.$string.'</strong>');

?>