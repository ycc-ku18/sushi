<<<<<<< HEAD
<<<<<<< HEAD
<?php include'partial_upper.php'; ?>
<?php include 'database/login_check.php';?>

<div class="container">
	<div id="map" style="height: 500px; width: 1000px;"></div>
	
	<div class="container">
		<form class="form col-md-4" action="database/store_location.php" method="post">
			
			<div class="form-group">
				<input id="hiddenCoord" type="text" name = "hiddenCoord" hidden></input>
			</div>
			
			<div class="form-group">
				<label>Selected Location</label>
				<input id = "reportLocation" class="form-control" type="text" name="reportLocation" readonly></input>
			</div>
			
			<div class="form-group">
				<input type="radio" name="category" value="Child Labor" checked> Child Labor</input>
				<input type="radio" name="category" value="Child Violence"> Child Violence</input>
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="reportDescription"></textarea>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="report">Report</button>
			</div>
			
		</form>
	</div>
</div>

=======
<?php include'partial_upper.php'; ?>
<?php include 'database/login_check.php';?>

<div class="container">
	<div id="map" style="height: 500px; width: 1000px;"></div>
	
	<div class="container">
		<form class="form col-md-4" action="database/store_location.php" method="post">
			
			<div class="form-group">
				<input id="hiddenCoord" type="text" name = "hiddenCoord" hidden></input>
			</div>
			
			<div class="form-group">
				<label>Selected Location</label>
				<input id = "reportLocation" class="form-control" type="text" name="reportLocation" readonly></input>
			</div>
			
			<div class="form-group">
				<input type="radio" name="category" value="Child Labor" checked> Child Labor</input>
				<input type="radio" name="category" value="Child Violence"> Child Violence</input>
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="reportDescription"></textarea>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="report">Report</button>
			</div>
			
		</form>
	</div>
</div>

>>>>>>> 188cb3248df141a88aa1e323e6db522eccfa7ac0
=======
<?php include'partial_upper.php'; ?>
<?php include 'database/login_check.php';?>

<div class="container">
	<div id="map" style="height: 500px; width: 1000px;"></div>
	
	<div class="container">
		<form class="form col-md-4" action="database/store_location.php" method="post">
			
			<div class="form-group">
				<input id="hiddenCoord" type="text" name = "hiddenCoord" hidden></input>
			</div>
			
			<div class="form-group">
				<label>Selected Location</label>
				<input id = "reportLocation" class="form-control" type="text" name="reportLocation" readonly></input>
			</div>
			
			<div class="form-group">
				<input type="radio" name="category" value="Child Labor" checked> Child Labor</input>
				<input type="radio" name="category" value="Child Violence"> Child Violence</input>
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="reportDescription"></textarea>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="report">Report</button>
			</div>
			
		</form>
	</div>
</div>

>>>>>>> 188cb3248df141a88aa1e323e6db522eccfa7ac0
<?php include'partial_lower.php' ?>