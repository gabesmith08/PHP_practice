<?php

function getTLD($url)
{
	//split url by the periods
	$urlArray = explode('.', $url);
	
	//if the last charactor in url was a period, set tld to the 2nd to last string in the array
	if($urlArray[count($urlArray)-1] == "")
	{
		$tld = $urlArray[count($urlArray)-2];
	}
	//else, set tld to the last string in the array
	else
	   $tld = $urlArray[count($urlArray)-1];
	
	return $tld;
}


?>