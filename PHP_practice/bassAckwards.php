<?php

function bassAckwards($input)
{
		// create array of the words
		$arrCommaSeperate = explode(",", $input);
	
		// for loop to iterate through word array
		for($k=0; $k<count($arrCommaSeperate); $k++)
		{
			//variable to hold the temporary word from the array
			$tempWord = $arrCommaSeperate[$k];
			
			// second for loop to iterate through individual letters in each word, and reverse them
			for($i=strlen($tempWord)-1, $j=0; $j<$i; $i--, $j++)
			{
				$temp = $tempWord[$i];
				$tempWord[$i] = $tempWord[$j];
				$tempWord[$j] = $temp;
			}
			// made an if statement to reset the input variable and fill it back up correctly
			if($k == 0)
				$input = "";
			else
				$input .= ",";
				$input .= $tempWord;
		}
	return $input;
}


?>
