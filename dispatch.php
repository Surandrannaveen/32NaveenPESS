<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" 
<title>Dispatch</title>
<!-- <link rel="stylesheet" href="css/bootstrap-4.3.1.css"> -->
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
</head>

<body>
<div class="container" style="width: 930px">
		<header>
			<img src="images/banner.jpg" width="900" height="200" alt="" />
		</header>
	
      <?php
        require_once 'nav.php';
        ?>
      
       <section style="margin-top: 20px">
			<form action="dispatch.php" method="post">
				<div class="form-group row">
					<label for="callerName" class="col-sm-4 col-form-label">Caller's
						Name </label>
					<div class="col-sm-8">
						<span id="callerName">
                     		<?php echo $callerName;?>
                     		<input type="text" name="callerName"
							id="callerName" value="<?php echo $callerName;?>">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="contactNo" class="col-sm-4 col-form-label"> Contact No:
					</label>
					<div class="col-sm-8">
						<span id="contactNo">
                     		<?php echo $contactNo;?>
                     		<input type="hidden" name="contactNo"
							id="contactNo" value="<?php echo $contactNo;?>">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="locationOfIncident" class="col-sm-4 col-form-label">
						Location of Incident: </label>
					<div class="col-sm-8">
						<span id="locationOfIncident">
                     		<?php echo $locationOfIncident;?>
                     			<input type="hidden" name="locationOfIncident"
							id="locationOfIncident" value="<?php echo $locationOfIncident;?>">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="typeOfIncident" class="col-sm-4 col-form-label"> Type
						of Incident: </label>
					<div class="col-sm-8">
						<span id="typeOfIncident">
                     		<?php echo $typeOfIncident;?>
                     		<input type="hidden" name="typeOfIncident"
							id="typeOfIncident" value="<?php echo $typeOfIncident;?>">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="descriptionOfIncident" class="col-sm-4 col-form-label">
						Description of Incident: </label>
					<div class="col-sm-8">
						<span id="descriptionOfIncident">
                     		<?php echo $descriptionOfincident;?>
                     		<input type="hidden" name="descriptionOfIncident"
							id="descriptionOfIncident"
							value="<?php echo $descriptionOfincident;?>">
						</span>
					</div>
				</div>

				<div class="form-group row">
					<label for="patrolCars" class="col-sm-4 col-form-label"> Choose a
						Patrol Car </label>
					<div class="col-sm-8">
						<table id="patrolCars" class="table table-striped">
							<tbody>
								<tr>
									<th>Car Number</th>
									<th>Status</th>
									<th></th>
								</tr>
								
                     		
                     		</tbody>
						</table>
					</div>
				</div>

				<div class="form-group row">

					<div class="col-sm-4"></div>

					<div class="col-sm-8" style="text-align: center">
						<input type="submit" name="btnDispatch" id="btnDispatch"
							value="Dispatch" class="btn btn-primary">
					</div>
				</div>

			</form>
		</section>



	</div>
</body>

</html>
