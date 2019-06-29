<?php
// get the row with maximum number of votes
$max_v = "SELECT MAX(votes) FROM poll_data";
if ($result_m = $cnct->query($max_v))
{
	while ($row_m=mysqli_fetch_row($result_m))
    {
		$col_v = $row_m[0];
	}
	mysqli_free_result($result_m);
}
//compare the votes and display
$query = "SELECT author, votes from poll_data";
if ($result = $cnct->query($query))
  {
  while ($row=mysqli_fetch_row($result))
    {
		if( $col_v == $row[1])
		{
			echo "<h4 style='background-color:#004a00;color: #ffffff;'>" .$row[0] . " - " . $row[1] . "</h4>";
		}
		else
		{
			echo "<h4>" .$row[0] . " - " . $row[1] . "</h4>";
		}
    }
  mysqli_free_result($result);
}

?>