<?php

function getStudent($min)
{
	// replace the query statement below with the correct statement
	$query = ("SELECT Student_ID, Last_Name, First_Name, GPA 
			  FROM interview_student
			  WHERE GPA >= $min;");
	return $query;
}

?>