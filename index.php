<?php

	function grabbing($url)
	{
	  $data = curl_init();

	  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt($data, CURLOPT_URL, $url);

	  $res = curl_exec($data);
	  curl_close($res);

	  return $res;
	}

	$data = explode("<font size='6' color='#FFFFFF'><a style='color:#004b8c;text-decoration:none'>", bacaHTML('http://68.183.185.124/hongkong/'));

	$string = substr($data[1], 0,4);

	print_r ($string);

?>