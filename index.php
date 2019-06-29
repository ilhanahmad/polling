<?php

if( isset($_POST['pol_sbmt']) && !empty($_POST['opt_auth']) )
{
	// connecting to db
	require_once('./db_con.php');
	$author = $_POST['opt_auth'];
	// fetch votes of this author
	$sql = "SELECT * FROM poll_data WHERE author='$author' limit 1";
	if ($result=mysqli_query($cnct,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
		// increamenting existing vote count by 1
		$n_vote = $row[2]+1;
		echo $n_vote;
    }
  mysqli_free_result($result);
}
	$query = "UPDATE poll_data SET votes = $n_vote WHERE author='$author';";
	// if poll inserted into db
	if ($cnct->query($query) === TRUE) {
    	$stat = "Poll submitted!";
		// header("Location: ./poll-stats.php");
		// die();
	} 
	// if error updating poll to db
	else {
	    $stat = "Try again later";
	}
	$cnct->close();
}
require_once('./header.php');
?>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">POLLING</h1>
		</div>
		<div class="col-md-12">
			<?php
				if (isset($stat)) {	
					if ($stat  == "Poll submitted!") {
						$color = "success";
					}
					else
						$color = "danger";
					echo '<div class="alert alert-'.$color.' text-center" role="alert">'.$stat.'</div>';
				}
			?>
		</div>
		<div class="col-md-12">
	<form class="frm_poll" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

		<div class="form-group">
		    <h3>Who is your favourite author?</h3>

		    <div class="form-check">
			  <input class="form-check-input" type="radio" name="opt_auth" id="migul" value="Miguel de Cervantes" required="">
			  <label class="form-check-label" for="migul">
			    Miguel de Cervantes
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="opt_auth" id="charles" value="Charles Dickens" required="">
			  <label class="form-check-label" for="charles">
				    Charles Dickens
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="opt_auth" id="jrr" value="J.R.R. Tolkien" required="">
			  <label class="form-check-label" for="jrr">
				    J.R.R. Tolkien
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="opt_auth" id="antonio" value="Antoine de Saint-Exuper" required="">
			  <label class="form-check-label" for="antonio">
				    Antoine de Saint-Exuper
			  </label>
			</div>
	    </div>
	    <button type="submit" class="btn btn-success" name="pol_sbmt">Submit</button>

	</form>
</div>
	<div class="col-md-12 text-center p-3 " >
		<a href="./poll-stats.php" class="btn btn-block btn-primary" >View Stats</a>
	</div>
</div>
</div>

<?php
require_once('./footer.php');
?>