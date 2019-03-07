<?php
//function to get the SQL Query information of a student whos NetID
//matches the given netId parameter
function getQuery($netId)
{
    //selects a student's UserID and Password from the interview_user_info table
    //if the student's NetID matches the given $netId
	$query = ("SELECT interview_user_info.UserID,
					  interview_user_info.Passwd
			  FROM interview_user_info
			  WHERE interview_user_info.NetID = '$netId';");
	return $query;
}

//function checks if the user password matches the password
//that's stored in the database for them
function checkPass($password, $queryResults)
{
    //queryResults is a 2D array of the query created in the function, "getQuery" above
    //so this stores the UserID from the query in the $thisUserID variable
    $thisUserID = $queryResults[0]['UserID'];

    //stores the UserID from the query in the $thisUserID variable
	$thisPasswd = $queryResults[0]['Passwd'];
    
    //if statement converts the given $password into MD5 because
    //the $thisPasswd from the query is stored as a MD5 hash string
	if (md5($password) == $thisPasswd) 
	{
        //returns the user's ID if the password is a match
    	return $thisUserID;
	}
	else
		return -1;
}

?>