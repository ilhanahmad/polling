<?php
 $pie_q ="SELECT * FROM poll_data";
 $result = mysqli_query($cnct,$pie_q);
 $chart_data="";
 while ($row = mysqli_fetch_array($result)) { 

    $author[]  = $row['author']  ;
    $votes[] = $row['votes'];
}

$cnct->close();
?>