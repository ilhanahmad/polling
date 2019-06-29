<?php
// connecting to db
require_once('./db_con.php');
require_once('./header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>POLLING STATS</h1>
		</div>
		<div class="col-md-12 text-center">
			<?php require_once('./fetch_polls.php'); ?>
		</div>
		<div class="col-md-12 text-center">
			<div style="width:40%;hieght:100%;text-align:center;">
				<h2 class="page-header" >Pie Chart </h2>
				<div>Votes </div>
				<canvas  id="chartjs_bar"></canvas> 
				<?php require_once('./bar_chart.php'); ?>
			</div>
		</div>
		<div class="col-md-12 text-center p-3 " >
		<a href="./" class="btn btn-primary" >Back</a>
	</div>
	</div>
</div>
<?php
require_once('./footer.php');
?>