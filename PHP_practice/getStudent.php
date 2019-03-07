<?php

function getStudent($min)
{
    //selects the student's ID, Last Name, First Name, and GPA
    //only if their GPA is above or equal to the input $min parameter
	$query = ("SELECT Student_ID, Last_Name, First_Name, GPA 
			  FROM interview_student
			  WHERE GPA >= $min;");
	return $query;
}

?>