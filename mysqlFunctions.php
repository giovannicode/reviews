<?php
function DBSave($review)
{
    global $dbc;
    
    $q = "INSERT INTO reviews (id, name, location, date, stars, review) VALUES(" . $review->getValues() . ")";
    $r = mysqli_query($dbc, $q);
    

    if(mysqli_error($dbc))
    {
       echo mysqli_error($dbc);
    }
}
?>