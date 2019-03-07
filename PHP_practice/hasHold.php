<?php

function hasHold($college)
{
    //selects the student's ID, Last Name, College, and Amount they have Due.
    //only if the student currently has an account on hold because of unpaid tuition
	$query = ("SELECT interview_student.Student_ID,
					  interview_student.Last_Name, 
					  interview_student.College, 
					  interview_account_hold.Amount_Due 
			  FROM interview_student
			  INNER JOIN interview_account_hold
			  ON interview_student.Student_ID = interview_account_hold.Student_ID
			  WHERE interview_student.College = '$college';");
	return $query;
}

?>