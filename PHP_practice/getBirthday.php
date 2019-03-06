<?php

function getBirthDate($birthdate)
{	// get current timezone
	$timezone = date_default_timezone_get();
	
	//set date variable to current date
	$date = date('m/d/Y', time());

	//create new current date array with month, day, and year split into seperate indicies
	$arrDateSeperate = explode('/', $date);

	//create new birthday date array with month, day, and year split into seperate indicies
	$arrBirthDate = explode('/', $birthdate);

	
	//if statement to determine whether it's the user's birthday or not
	if($arrDateSeperate[0] == $arrBirthDate[0] && $arrDateSeperate[1] == $arrBirthDate[1])
		$isBirthday = true;
	else
		$isBirthday = false;

	//set age variable to the user age with if statement that determines if its past their birthday month yet
	if($arrDateSeperate[0] >= $arrBirthDate[0] && $arrDateSeperate[1] >= $arrBirthDate[1])
		$age = $arrDateSeperate[2] - $arrBirthDate[2];
	else
		$age = ($arrDateSeperate[2] - $arrBirthDate[2]) -1;

	//set keyValueArray to the users age along with if it's their birthday or not, and returns it
	$keyValueArray = array("age" => $age, "birthday" => $isBirthday);
	return $keyValueArray;
}

?>