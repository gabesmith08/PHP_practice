<?php

function bubbleSort($input)
{
    //swap variable
    $swapped = true;

    //variable to store length of $input
    $n = count($input);

    //temp variable
    $temp = null;

    //outer loop
    while($swapped)
    {
        $swapped = false;
        //inner loop
        for($i=0; $i<$n-1; $i++)
        {
            //swap if the current value is greater the next value. change > to > for descending order
            if( $input[$i]>$input[$i+1]) 
            {
                $temp=$input[$i];
                $input[$i]=$input[$i+1];
                $input[$i+1]=$temp;
                $swapped=true;
            }
        }
    }
 
    return $input;
}

?>