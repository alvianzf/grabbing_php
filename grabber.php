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
	
?>